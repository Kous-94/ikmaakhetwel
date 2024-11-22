<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    // Display a list of all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function webshop()
    {
        $products = Product::all();
        return view('webshop', compact('products'));
    }
    public function webshopShow($id)
    {
        $product = Product::findOrFail($id);
        return view('webshop.show', compact('product'));
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in the database
    public function store(ProductRequest $request)
    {
        Product::create($request->validated()); // Create a new product with validated data

        return redirect()->route('products')->with('success', 'Product created successfully!');
    }

    // Display the specified product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update the specified product in the database
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validated()); // Update product data with validated data

        return redirect()->route('products')->with('success', 'Product updated successfully!');
    }

    // Remove the specified product from the database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products')->with('success', 'Product deleted successfully!');
    }
}
