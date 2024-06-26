<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/products', function () {
//  return view('products');
//});

Route::get('/product_details', function () {
    return view('product_details');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::resource('/products',ProductController::class);
Route::resource('/users',UserController::class);

