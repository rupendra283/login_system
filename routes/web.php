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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('product', [App\Http\Controllers\PostController::class,'index'])->name('product');

Route::get('product/create', [App\Http\Controllers\PostController::class,'create'])->name('product-create');
Route::post('product/store', [App\Http\Controllers\PostController::class,'store'])->name('product-store');
Route::get('product/edit{id}', [App\Http\Controllers\PostController::class,'edit'])->name('product-edit');
Route::get('product/delete{id}', [App\Http\Controllers\PostController::class,'delete'])->name('product-delete');
