<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
{
     $products = Product::all(); 
    return view('shop', compact('products'));
}
public function show($id)
{
    $product = Product::findOrFail($id);
    return view('shop.product', compact('product'));
}

 public function productdetails($id)
{
    
    $products = [
        1 => ['name' => 'Nordic Chair', 'price' => 50, 'image' => 'assets/image/product/img1.webp', 'description' => 'Stylish Nordic chair.'],
        2 => ['name' => 'Kruzo Aero Chair', 'price' => 50, 'image' => 'assets/image/product/img2.webp', 'description' => 'Comfortable aero chair.'],
        3 => ['name' => 'Ergonomic Chair', 'price' => 78, 'image' => 'assets/image/product/image3.webp', 'description' => 'Ergonomic for working hours.'],
        4 => ['name' => 'Nordic Chair', 'price' => 43, 'image' => 'assets/image/product/img4.webp', 'description' => 'Stylish Nordic chair.'],
        5 => ['name' => 'Kruzo Aero Chair', 'price' => 50, 'image' => 'assets/image/product/img5.webp', 'description' => 'Comfortable aero chair.'],
        6 => ['name' => 'Ergonomic Chair', 'price' => 50, 'image' => 'assets/image/product/img6.webp', 'description' => 'Ergonomic for working hours.'],
        7 => ['name' => 'Nordic Chair', 'price' => 78, 'image' => 'assets/image/product/img8.webp', 'description' => 'Stylish Nordic chair.'],
        8=> ['name' => 'Kruzo Aero Chair', 'price' => 43, 'image' => 'assets/image/product/img9.webp', 'description' => 'Comfortable aero chair.'],
        9 => ['name' => 'Ergonomic Chair', 'price' => 50, 'image' => 'assets/image/product/img10.webp', 'description' => 'Ergonomic for working hours.'],
        10 => ['name' => 'Nordic Chair', 'price' => 50, 'image' => 'assets/image/product/img9.webp', 'description' => 'Stylish Nordic chair.'],
        11=> ['name' => 'Kruzo Aero Chair', 'price' => 78, 'image' => 'assets/image/product/img8.webp', 'description' => 'Comfortable aero chair.'],
        12 => ['name' => 'Ergonomic Chair', 'price' => 43, 'image' => 'assets/image/product/img4.webp', 'description' => 'Ergonomic for working hours.'],
        13=> ['name' => 'Nordic Chair', 'price' => 50, 'image' => 'assets/image/product/img5.webp', 'description' => 'Stylish Nordic chair.'],
        14 => ['name' => 'Kruzo Aero Chair', 'price' => 50, 'image' => 'assets/image/product/img6.webp', 'description' => 'Comfortable aero chair.'],
        15 => ['name' => 'Ergonomic Chair', 'price' => 78, 'image' => 'assets/image/product/img8.webp', 'description' => 'Ergonomic for working hours.'],
        
    ];

    if (!isset($products[$id])) {
        abort(404);
    }

    $product = $products[$id];
    return view('productdetails', compact('product'));
}

}
