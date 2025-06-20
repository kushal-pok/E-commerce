<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::controller(HomeController::class) -> group(function() {
    Route::get('home', 'index') -> name('home');
    Route::get('shop', 'shop') -> name('shop');
    Route::get('/about', 'about') -> name('about');
    Route::get('/contact', 'contact') -> name('contact');
     Route::get('cart', 'cart') -> name('cart');
      Route::get('productdetails', 'productdetails') -> name('productdetails');
      Route::get('checkout', 'checkout') -> name('checkout');
});
  

Route::controller(Usercontroller::class)->group(function()
{
   Route::get('user', 'index') -> name('user');
   Route::get('user/order-history', 'create') -> name('user.history');
   Route::get('user/detail', 'detail') -> name('detail');
   Route::get('user/settings', 'settings') -> name('settings');
});

Route::controller(AdminController::class)->group(function()
{
    Route::get('admin/index', 'index') -> name('admin');
    Route::get('admin/add-category', 'addcategory') -> name('admin.add');
    Route::get('admin/view-category', 'viewcategory') -> name('admin.view');
    Route::get('admin/users', 'users') -> name('admin.user');
    Route::get('admin/edit-category', 'editcategory') -> name('admin.edit');
    Route::get('admin/vendor', 'vendors') -> name('admin.vendors');
    Route::get('admin/orders', 'orders') -> name('admin.order');
    Route::get('admin/order-detail', 'orderdetail') -> name('admin.detail');
        Route::get('admin/products', 'products') -> name('admin.products');
});