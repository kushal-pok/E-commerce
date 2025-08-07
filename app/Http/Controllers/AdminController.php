<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    // public function index(){
    //     return view('admin/index');
    // }

    public function addcategory(){
        return view('admin/add-category');
    }

    public function viewcategory(){
        return view('admin/view-category');
    }

    public function editcategory(){
        return view('admin/edit-category');
    }

    public function users(){
       $users = User::all(); 
        return view('admin.users', compact('users'));
    }
     public function blockUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'blocked';  // Assuming you have a 'status' field to track block/unblock
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User blocked successfully.');
    }

    // Unblock a user
    public function unblockUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 'active';
        $user->save();

        return redirect()->route('admin.users')->with('success', 'User unblocked successfully.');
    }


    public function orders(){
        $orders = Order::with('user')->get();
        return view('admin.orders', compact('orders'));
    }


//   public function orderdetail($id)
// {
//     $order = Order::with(['user', 'orderItems.product'])->findOrFail($id);
//     return view('admin.order-detail', compact('order'));
// }

public function orderDetail($id)
{
    $order = Order::with(['user', 'orderItems.product'])->findOrFail($id);
    return view('admin.order-detail', compact('order'));
}
    

     public function products(){
        return view('admin/products');
     }
      public function store(Request $request)
{
    $request->validate([
        'category_name' => 'required|string|max:255',
        'product_name' => 'required|string|max:255',
        'product_details' => 'required|string',
        'product_price' => 'required|numeric',
        'product_quantity' => 'required|integer|min:0',
        'product_image' => 'required|image|max:2048',
    ]);

    // First, find or create the category
    $category = Category::firstOrCreate(['name' => $request->category_name]);

    // Handle the product image upload
    $imagePath = $request->file('product_image')->store('products', 'public');

    // Create the product
    Product::create([
        'category_id' => $category->id,
        'product_name' => $request->product_name,
        'product_details' => $request->product_details,
        'product_price' => $request->product_price,
        'product_quantity' => $request->product_quantity,
        'product_image' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Product added successfully!');
}

    public function index()
{
    return view('admin.index', [
        'totalOrders'     => Order::count(),
        'totalUsers'      => User::where('role', 'user')->count(),
        'totalVendors'    => User::where('role', 'vendor')->count(),
        'totalCommission' => Order::sum('commission'), // assuming 'commission' column exists
        'recentOrders'    => Order::latest()->take(5)->get(),
    ]);
}

 public function showLoginForm()
    {
        return view('admin.index'); // make sure this path matches
    }
 public function login(Request $request)
    {
         $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if admin user exists
        $user = User::where('email', $request->email)
                    ->where('role', 'admin') // make sure 'role' column exists
                    ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user); // log the user in
            return redirect('/admin/index'); // or your desired route
        }

        return back()->withErrors(['Invalid credentials']);
    }
    }
    

