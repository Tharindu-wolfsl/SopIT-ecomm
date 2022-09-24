<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Cart;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', function () {
    return view('login');
});
Route::view('/register','register');
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('/delete_item/{id}', function ($id) {
    Cart::find($id)->delete();
    return redirect('cart');
});
Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
Route::get('/',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cart',[ProductController::class,'cartList']);
Route::get('/orders',[ProductController::class,'orderAmount']);
Route::post('place_order',[ProductController::class,'placeOrder']);
Route::get('/myorders',[ProductController::class,'myOrders']);


Route::view('/testform','formview');


