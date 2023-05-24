<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
// Route::resource('user', UserController::class);
Route::get('/',[HomeController::class, 'index']);
Route::get('/dashboard',[HomeController::class, 'showDashboard']);
Route::get('/admin',[HomeController::class, 'showAdmin']);
Route::get('/staff',[HomeController::class, 'showStaff']);
Route::get('/users',[HomeController::class, 'showUsers']);
Route::get('/kategori_1',[HomeController::class, 'showKategori1']);
Route::get('/kategori_2',[HomeController::class, 'showKategori2']);
Route::get('/kategori_3',[HomeController::class, 'showKategori3']);
Route::get('/kategori_4',[HomeController::class, 'showKategori4']);
Route::get('/kategori_5',[HomeController::class, 'showKategori5']);
Route::get('/kategori_6',[HomeController::class, 'showKategori6']);
Route::get('/kategori_7',[HomeController::class, 'showKategori7']);
Route::get('/kategori_8',[HomeController::class, 'showKategori8']);
Route::get('/kategori_9',[HomeController::class, 'showKategori9']);
Route::get('/kategori_10',[HomeController::class, 'showKategori10']);
Route::get('/kategori_11',[HomeController::class, 'showKategori11']);
Route::get('/kategori_12',[HomeController::class, 'showKategori12']);
Route::get('/products',[HomeController::class, 'showProducts']);
// Route::get('/insert',[UserController::class,'showInsert']);
// Route::post('add',[UserController::class,'addUser']);
// Route::get('/detail/{id}',[UserController::class, 'showUser']);
// Route::get('/edit/{id}',[UserController::class, 'editUser']);
// Route::post('update',[UserController::class, 'updateUser'])->name('users.update');