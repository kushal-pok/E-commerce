<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class UserController extends Controller
{
     public function index(){
        return view('user/index');
    }

      public function history(){
        return view('user/order-history');
    }

      public function detail(){
        return view('user/detail');
    }

      public function settings(){
        $user = Auth::user();

if (!$user) {
    return redirect()->route('login')
        ->withErrors(['You must be logged in to update your profile.']);
}
        return view('user/settings');
    }

    // public function create()
    // {
    //     // Return a view for creating a user, e.g.
    //     return view('details');
    // }
    public function __construct()
{
    $this->middleware('auth');
}
 public function orderHistory()
    {
        $user = Auth::user();

        // Fetch orders for the logged-in user, latest first
        $orders = Order::where('user_id', $user->id)
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('user.order-history', compact('orders'));
    }
    public function orderDetail($orderId)
{
    $order = Order::with('products')->findOrFail($orderId);
    return view('user.order-detail', compact('order'));
}

}
