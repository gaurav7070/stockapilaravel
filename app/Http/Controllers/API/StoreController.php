<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    // Create a new Store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:stores,name'
        ]);

        $store = Store::create([
            'name' => $request->name
        ]);

        return response()->json([
            'message' => 'Store created successfully',
            'store' => $store
        ]);
    }

    // Get all Stores
    public function index()
    {
        $stores = Store::all();
        return response()->json($stores);
    }

    // Get a single Store with its Stocks
    public function show($id)
    {
        $store = Store::with('stocks')->find($id);

        if (!$store) {
            return response()->json(['message' => 'Store not found'], 404);
        }

        return response()->json($store);
    }
}
