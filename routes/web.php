<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return view('logout');
});

Route::view('/register', 'register');
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ProductController::class, 'index']);
Route::get('detail/{id}', [ProductController::class, 'detail']);
Route::post('add_to_cart', [ProductController::class, 'addToCart']);
Route::get('cartlist', [ProductController::class, 'cartlist']);
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("ordernow", [ProductController::class, 'orderNow']);
Route::post("orderplace", [ProductController::class, 'orderPlace']);
Route::get("myorder", [ProductController::class, 'myOrder']);
