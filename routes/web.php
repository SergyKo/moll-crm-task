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

//order
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name("order-index");
Route::get('/order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name("order-create");
Route::get('/order/{id}', [\App\Http\Controllers\OrderController::class, 'show'])->name("order-view");
Route::get('/order/{id}/edit', [\App\Http\Controllers\OrderController::class, 'edit'])->name("order-edit");
Route::post('/order/{id}/delete', [\App\Http\Controllers\OrderController::class, 'delete'])->name("order-delete");
Route::post('/order/{id}/update', [\App\Http\Controllers\OrderController::class, 'update'])->name("order-update");


Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'show']);
//edit

