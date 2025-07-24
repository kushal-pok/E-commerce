<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'details' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('products', 'public');
    }

    Product::create($validated);

    return redirect()->route('admin.products.index')->with('success', 'Product added successfully!');
}

public function update(Request $request, Product $product)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'details' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

  if ($request->hasFile('product_image')) {
        // Optional: delete old image from storage
        // Storage::delete('public/' . $product->product_image);

        $imagePath = $request->file('product_image')->store('products', 'public');
        $validated['product_image'] = $imagePath;
  }

    $product->update($validated);

    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
}

}
