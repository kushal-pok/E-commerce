<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
      public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'product_name' => 'required|string|max:255',
            'product_details' => 'required',
            'product_price' => 'required|numeric',
            'commission' => 'required|numeric',
            'product_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('product_image')->store('products', 'public');

        Product::create([
            'category_name' => $request->category_name,
            'product_name' => $request->product_name,
            'product_details' => $request->product_details,
            'product_price' => $request->product_price,
            'commission' => $request->commission,
            'product_image' => $imagePath,
        ]);

        return back()->with('success', 'Product added successfully!');
    }
}
