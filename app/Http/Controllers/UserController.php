<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

 public function store(Request $request) {
    $user = new User();
    $user->name = $request->input('name');
    $user->save();

    return view('/user')->with('index', 'User saved!');
 }

      public function history(){
        return view('user/order-history');
    }

      public function detail(){
        return view('user/detail');
    }

      public function settings(){
        return view('user/settings');
    }

}
