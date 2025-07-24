<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;

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
    
}
