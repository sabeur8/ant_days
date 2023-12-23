<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::view('/','welcome')->name('home');
Route::get('/product',[ProductController::class,'showProduct'])->name('product.show');
Route::get('/product/list',[ProductController::class,'showListProduct'])->name('productlist.show');


