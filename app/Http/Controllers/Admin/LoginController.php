<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    $user = User::where('email', $credentials['email'])->first();

    if (!$user) {
        return back()->withErrors(['email' => 'User not found']);
    }

    if (!Hash::check($credentials['password'], $user->password)) {
        return back()->withErrors(['password' => 'Incorrect password']);
    }

    if ($user->role !== 'admin') {
        return back()->withErrors(['email' => 'Unauthorized']);
    }

    Auth::login($user);

    return redirect('/admin/index');
}
}
