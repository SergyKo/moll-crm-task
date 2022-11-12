<?php

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

//Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);

// order
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name("order-index");
Route::get('/order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name("order-create");
Route::get('/order/{id}', [\App\Http\Controllers\OrderController::class, 'show'])->name("order-view");
Route::get('/order/{id}/edit', [\App\Http\Controllers\OrderController::class, 'edit'])->name("order-edit");
Route::delete('/order/delete/{id}', [\App\Http\Controllers\OrderController::class, 'delete'])->name("order-delete");
Route::put('/order/update/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->name("order-update");

// user
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'show'])->name("user-view");
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name("user-index");
Route::get('/user/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name("user-edit");
Route::delete('/user/delete/{id}', [\App\Http\Controllers\UserController::class, 'delete'])->name("user-delete");
Route::put('/user/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name("user-update");

// product
Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name("product-view");
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name("product-index");
Route::get('/product/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name("product-edit");
Route::delete('/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'delete'])->name("product-delete");
Route::put('/product/update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name("product-update");
