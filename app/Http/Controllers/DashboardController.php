<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order; 

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
         dd($user);

         $orders = Order::where('user_id', Auth::id())
                   ->latest()
                   ->take(3)
                   ->get();
                   dd($orders);

    return view('user.index', compact('orders'));
    }

    public function __construct()
{
    $this->middleware('auth');
}

}
