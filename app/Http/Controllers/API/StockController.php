<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{

    public function index(Request $request)
{
    $query = Stock::with('store');

    if ($request->has('sortField') && $request->has('sortDirection')) {
        $query->orderBy($request->sortField, $request->sortDirection);
    } else {
        $query->orderBy('created_at', 'desc');
    }

    if ($request->has('search') && $request->search !== '') {
        $search = $request->search;
        $query->where(function ($q) use ($search) {
            $q->where('item_code', 'like', '%' . $search . '%')
              ->orWhere('item_name', 'like', '%' . $search . '%')
              ->orWhere('location', 'like', '%' . $search . '%');
        });
    }

    $perPage = $request->get('size', 10);
    $stocks = $query->paginate($perPage);

    return response()->json($stocks);
}

    
    public function store(Request $request)
    {
        $request->validate([
            'stocks' => 'required|array',
            'stocks.*.item_code' => 'required|string',
            'stocks.*.item_name' => 'required|string',
            'stocks.*.quantity' => 'required|numeric',
            'stocks.*.location' => 'required|string',
            'stocks.*.store_id' => 'required|integer',
            'stocks.*.in_stock_date' => 'required|date',
        ]);

        foreach ($request->stocks as $item) {
            Stock::create([
                'item_code' => $item['item_code'],
                'item_name' => $item['item_name'],
                'quantity' => $item['quantity'],
                'location' => $item['location'],
                'store_id' => $item['store_id'],
                'in_stock_date' => $item['in_stock_date'],
            ]);
        }

        return response()->json(['message' => 'Stock entries saved successfully']);
    }

    public function destroy($id)
    {
        $stock = Stock::find($id);
        if ($stock) {
            $stock->delete();
            return response()->json(['message' => 'Stock entry deleted successfully']);
        } else {
            return response()->json(['message' => 'Stock entry not found'], 404);
        }
    }
}
