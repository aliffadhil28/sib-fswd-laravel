<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('admin')->group(function (){
    Route::resource('user', UserController::class);
    Route::resource('produk', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('slider', SliderController::class);
    Route::get('/admin',[HomeController::class, 'showAdmin'])->name('admin');
    Route::get('/staff',[HomeController::class, 'showStaff'])->name('staff');
    Route::get('/users',[HomeController::class, 'showUser'])->name('user');
    Route::get('/dashboard',[HomeController::class, 'showDashboard']);
});
Route::get('/',[HomeController::class, 'index'])->name('dashboard');
Route::middleware('staff')->group(function(){
    Route::get('/staff/kategori/{id}',[StaffController::class, 'showCategory'])->name('staff.showKategori');
    Route::get('/staff/kategori',[StaffController::class, 'getCategory'])->name('staff.kategori');
    Route::get('/staff/slider/{id}',[StaffController::class, 'showSlider'])->name('staff.showSlider');
    Route::get('/staff/slider',[StaffController::class, 'getSlider'])->name('staff.slider');
    Route::get('/staff/produk',[StaffController::class, 'getProducts'])->name('staff.product');
    Route::get('/staff/produk/{id}',[StaffController::class, 'showProducts'])->name('staff.showProduct');
    Route::get('/staff/staff',[StaffController::class, 'getStaff'])->name('staff.staff');
    Route::get('/staff/users',[StaffController::class, 'getUser'])->name('staff.user');
    Route::get('/staff/admin',[StaffController::class, 'getAdmin'])->name('staff.admin');
    Route::get('/staff/user',[StaffController::class, 'getAllUsers'])->name('staff.allUsers');
    Route::get('/staff/user/{id}',[StaffController::class, 'showUsers'])->name('staff.showUsers');
});
Route::get('/products/{id}',[HomeController::class, 'detailProducts'])->name('product.detail')->middleware('auth');
Route::get('/login',[LoginRegisterController::class, 'login'])->name('login');
Route::get('/register',[LoginRegisterController::class, 'register'])->name('register');
Route::get('/logout',[LoginRegisterController::class, 'logout']);
Route::post('store',[LoginRegisterController::class, 'storeUser'])->name('store');
Route::post('auth',[LoginRegisterController::class, 'auth'])->name('auth');
// Route::get('/insert',[UserController::class,'showInsert']);
// Route::post('add',[UserController::class,'addUser']);
// Route::get('/detail/{id}',[UserController::class, 'showUser']);
// Route::get('/edit/{id}',[UserController::class, 'editUser']);
// Route::post('update',[UserController::class, 'updateUser'])->name('users.update');
