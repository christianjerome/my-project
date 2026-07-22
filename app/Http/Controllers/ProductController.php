<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $response = Http::get('https://6a5f67ffb1933e9d25fc3e36.mockapi.io/api/inventory/product');
        if($response->successful()) {
            $products = $response->json();
        } else {
            $products = [];
        }

        return view('products', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'description' => 'required',
            'size' => 'required',
            'quantity' => 'required|integer',
            'status' => 'required',
        ]);

        $response = Http::post('https://6a5f67ffb1933e9d25fc3e36.mockapi.io/api/inventory/product', [
            'code' => $request->code,
            'description' => $request->description,
            'size' => $request->size,
            'quantity' => $request->quantity,
            'status' => $request->status,
            'id' => $request->id,
        ]);

        if ($response->successful()) {
            return redirect()
                ->back()
                ->with('success', 'Product successfully created.');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Unable to save product.');
    }
}
