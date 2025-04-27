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

        // Tabulator pagination and sorting
        if ($request->has('sort')) {
            $sort = json_decode($request->sort)[0];
            $query->orderBy($sort->field, $sort->dir);
        } else {
            $query->orderBy('created_at', 'desc'); // Default sort
        }

        $perPage = $request->get('size', 10);
        return $query->paginate($perPage);
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
}
