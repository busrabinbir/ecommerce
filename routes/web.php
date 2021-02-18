<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/home', [HomeController::class, 'getData']);
Route::get('/category/{id}', [ProductController::class, 'listProducts'])->name('category'); //list products by category
Route::get('/product/{id}', [ProductController::class, 'viewProducts'])->name('product'); //view product detail
