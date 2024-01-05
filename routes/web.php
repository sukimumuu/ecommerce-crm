<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

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
    return view('layout.master');
});
// PRODUCTS - ADMIN SIDE
Route::get('/products', [ProductsController::class,'products'])->name('products');
Route::get('/products-create', [ProductsController::class,'create'])->name('products-create');
Route::post('/products-store', [ProductsController::class,'store'])->name('products-store');
Route::get('/products-destroy/{id}', [ProductsController::class,'destroy'])->name('products-destroy');
Route::get('/category', [CategoryController::class,'index'])->name('category');
Route::post('/category-store', [CategoryController::class,'store'])->name('category-store');
