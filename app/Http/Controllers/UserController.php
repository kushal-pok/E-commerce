<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user/settings');
    }

}
