<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\TechnicianController;
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
Route::post('addcart/{id}', [HomeController::class, 'addcart']);
Route::get('/showcart', [HomeController::class, 'showcart'])->name('showcart');
Route::get('/delete/{id}', [HomeController::class, 'deletecart']);
Route::post('/order', [HomeController::class, 'confirmorder'])->name('confirmorder');
Route::get('/products_list', [HomeController::class, 'products'])->name('products_list');
Route::get('/product_search',[HomeController::class, 'product_search'])->name('product_search');
Route::post('/khalti/payment/verify', [PaymentController::class, 'verifypayment'])->name('khalti.verifypayment'); 
Route::post('hire',[HomeController::class,'hire'])->name('hire');


Route::group(['middleware' => ['auth','role:Admin']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});
      
Route::group(['middleware' => ['auth','role:Vendor']], function() {
    
    Route::resource('products', ProductController::class);
    Route::resource('productcategory', ProductCategoryController::class);
    Route::get('showorder', [AdminController::class, 'showorder'])->name('admin.showorder');
    Route::get('updatedeliverystatus/{id}', [AdminController::class, 'updatedeliverystatus'])->name('updatedeliverystatus');
});

Route::group(['middleware' => ['auth', 'role:Technician']], function() {
    Route::resource('technician',TechnicianController::class);
});

Route::post('feedback', [FeedbackController::class, 'store'])->name('feedback');
Route::post('products/{product}/ratings', [RatingController::class, 'store'])->name('ratings.store');
