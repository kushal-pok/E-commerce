<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\Admin\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::controller(HomeController::class) -> group(function() {
    Route::get('home', 'index') -> name('home');
    Route::get('shop,', 'shop') -> name('shop');
    Route::get('/about', 'about') -> name('about');
    Route::get('/contact', 'contact') -> name('contact');
     Route::get('cart', 'cart') -> name('cart');
      Route::get('productdetails/{id}', 'productdetails') -> name('productdetails');
      Route::get('checkout', 'checkout') -> name('checkout');
      Route::delete('/cart/remove/{id}','removeItem')->name('cart.remove');
      Route::post('/cart/add','addToCart')->name('cart.add');
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
    Route::get('admin/orders', 'orders') -> name('admin.order');
    Route::get('admin/order-detail', 'orderdetail') -> name('admin.detail');
        Route::get('admin/products', 'products') -> name('admin.products');
        Route::post('/admin/add-category',  'store')->name('admin.add');
});


//  Route::post('/logout', [LogoutController::class, 'logout'])->name('logout'); 

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/index', [DashboardController::class, 'index'])->name('user.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/settings', [UserSettingsController::class, 'edit'])->name('user.settings.edit');
    Route::post('/user/settings', [UserSettingsController::class, 'update'])->name('user.settings.update');
      Route::get('/user/orders', [UserController::class, 'orderHistory'])->name('user.orders.history');
      Route::get('/user/detail/{order}', [UserController::class, 'orderDetail'])->name('user.orders.detail');
    //   Route::get('details', [UserController::class, 'create']);
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AuthController::class, 'register'])->name('admin.register.submit');

    



    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', fn () => view('admin.dashboard'))->name('dashboard');
    });
});



