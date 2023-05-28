<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\App\Http\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [UserController::class, 'getUser'])->name('home');
Route::resource('user', UserController::class);
Route::resource('produk', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('slider', SliderController::class);
Route::get('/',[HomeController::class, 'index']);
Route::get('/dashboard',[HomeController::class, 'showDashboard']);
Route::get('/admin',[HomeController::class, 'showAdmin'])->name('admin');
Route::get('/penjual',[HomeController::class, 'showPenjual'])->name('penjual');
Route::get('/pembeli',[HomeController::class, 'showPembeli'])->name('pembeli');
Route::get('/users',[HomeController::class, 'showUsers'])->name('users');
Route::get('/shoes',[HomeController::class, 'showShoes'])->name('shoes');
Route::get('/items',[HomeController::class, 'showItems'])->name('items');
Route::get('/accessories',[HomeController::class, 'showAccessories'])->name('accessories');
Route::get('/products',[HomeController::class, 'showProducts'])->name('users');
// Route::get('/insert',[UserController::class,'showInsert']);
// Route::post('add',[UserController::class,'addUser']);
// Route::get('/detail/{id}',[UserController::class, 'showUser']);
// Route::get('/edit/{id}',[UserController::class, 'editUser']);
// Route::post('update',[UserController::class, 'updateUser'])->name('users.update');
