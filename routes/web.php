<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'getUser'])->name('home');
Route::resource('user', UserController::class);
// Route::get('/insert',[UserController::class,'showInsert']);
// Route::post('add',[UserController::class,'addUser']);
// Route::get('/detail/{id}',[UserController::class, 'showUser']);
// Route::get('/edit/{id}',[UserController::class, 'editUser']);
// Route::post('update',[UserController::class, 'updateUser'])->name('users.update');