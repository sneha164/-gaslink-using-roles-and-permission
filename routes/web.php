<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', [NavigationController::class, 'index'])->name('welcome');
Route::get('about', [NavigationController::class, 'about'])->name('user.about');
Route::get('benefits', [NavigationController::class, 'benefits'])->name('user.benefits');
Route::get('contact', [NavigationController::class, 'contact'])->name('user.contact');
Route::get('services', [NavigationController::class, 'services'])->name('user.services');




Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('addcart/{id}',[HomeController::class, 'addcart']);
Route::get('/showcart', [HomeController::class, 'showcart'])->name('showcart');
Route::get('/delete/{id}',[HomeController::class,'deletecart']);
Route::post('/order', [HomeController::class, 'confirmorder'])->name('confirmorder');

Route::group(['middleware' => ['auth', 'role:Admin']], function () {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('productcategory', ProductCategoryController::class);
    // Route::get('showorder',[AdminController::class,'showorder']);
});
