<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    // Index method
    public function index()
    {
        return Product::paginate(env('PAGE_SIZE'));
    }

    // Store method
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product);
    }

    // Show method
    public function show(Product $product)
    {
        return $product;
    }

    // Update method
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product);
    }

    // Destroy method
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
