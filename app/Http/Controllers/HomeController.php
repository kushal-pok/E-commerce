<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Helpers\EsewaHelper;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index()
    {
        return view('home');
    }
    public function shop(){
          $products = Product::with('category')->where('product_quantity', '>', 0)->get();
    $categories = Category::all();
        
    return view('shop', compact('products'));
    // return view('shop');
   }

    //    public function productdetails(){
    //     return view('productdetails');
    // }
    
    public function productdetails($id)
{
    
    $products = [
        1 => ['name' => 'Nordic Chair', 'price' => 530, 'image' => 'assets/image/product/img1.webp', 'description' => 'Stylish Nordic chair.'],
        2 => ['name' => 'Kruzo Aero Chair', 'price' => 208, 'image' => 'assets/image/product/img2.webp', 'description' => 'Comfortable aero chair.'],
        3 => ['name' => 'Ergonomic Chair', 'price' => 430, 'image' => 'assets/image/product/image3.webp', 'description' => 'Ergonomic for working hours.'],
        4 => ['name' => 'Nordic Chair', 'price' => 55, 'image' => 'assets/image/product/img4.webp', 'description' => 'Stylish Nordic chair.'],
        5 => ['name' => 'Kruzo Aero Chair', 'price' => 250, 'image' => 'assets/image/product/img5.webp', 'description' => 'Comfortable aero chair.'],
        6 => ['name' => 'Ergonomic Chair', 'price' => 43, 'image' => 'assets/image/product/img6.webp', 'description' => 'Ergonomic for working hours.'],
        7 => ['name' => 'Nordic Chair', 'price' => 10, 'image' => 'assets/image/product/img8.webp', 'description' => 'Stylish Nordic chair.'],
        8=> ['name' => 'Kruzo Aero Chair', 'price' => 71, 'image' => 'assets/image/product/img9.webp', 'description' => 'Comfortable aero chair.'],
        9 => ['name' => 'Ergonomic Chair', 'price' => 40, 'image' => 'assets/image/product/img10.webp', 'description' => 'Ergonomic for working hours.'],
        10 => ['name' => 'Nordic Chair', 'price' => 70, 'image' => 'assets/image/product/img9.webp', 'description' => 'Stylish Nordic chair.'],
        11=> ['name' => 'Kruzo Aero Chair', 'price' => 200, 'image' => 'assets/image/product/img8.webp', 'description' => 'Comfortable aero chair.'],
        12 => ['name' => 'Ergonomic Chair', 'price' => 83, 'image' => 'assets/image/product/img4.webp', 'description' => 'Ergonomic for working hours.'],
        13=> ['name' => 'Nordic Chair', 'price' => 59, 'image' => 'assets/image/product/img5.webp', 'description' => 'Stylish Nordic chair.'],
        14 => ['name' => 'Kruzo Aero Chair', 'price' => 50, 'image' => 'assets/image/product/img6.webp', 'description' => 'Comfortable aero chair.'],
        15 => ['name' => 'Ergonomic Chair', 'price' => 100, 'image' => 'assets/image/product/img8.webp', 'description' => 'Ergonomic for working hours.'],
        
    ];

    if (!isset($products[$id])) {
        abort(404);
    }

    $product = $products[$id];
    return view('productdetails', compact('product'));
}

 public function cart(){
         $cartItems = Session::get('cart', []);
    return view('cart', compact('cartItems'));
    }  

    public function checkout(){
         $user = Auth::user();
        
    
    // Example: If you have a Cart model related to the user
    $cartItems = $user->cartItems ?? [];  // fallback to empty array
    $total = 0;

    foreach ($cartItems as $item) {
        $total += $item->price * $item->quantity;
    }

    return view('checkout', compact('cartItems', 'total'));
}
public function showCheckout($id)
{
    $product = Product::findOrFail($id);
    return view('checkout', compact('product'));
}

    

public function placeOrder(Request $request)
{
    $validated = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
        'district' => 'required',
    ]);

    // Save order to DB (optional)
    // ...

    // Total from cart or fixed test value
    $total = 100;

    return view('esewa-payment', [
        'total' => $total
    ]);
}



     public function about(){
        return view('about');
    } 
     public function contact(){
        return view('contact');
    } 

    public function addToCart(Request $request)
    {
        $cart = Session::get('cart', []);

        $id = $request->input('id');

        if (isset($cart[$id])) {
            
            $cart[$id]['quantity'] += $request->input('quantity');
        } else {
            
            $cart[$id] = [
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'image' => $request->input('image'),
                'quantity' => $request->input('quantity'),
            ];
        }

        Session::put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Product added to cart.');
    }
    
    public function removeItem($id)
{
    $cart = Session::get('cart', []);

    if(isset($cart[$id])){
        unset($cart[$id]);
        Session::put('cart', $cart);
    }

    return redirect()->route('cart')->with('success', 'Item removed from cart.');
}

}
