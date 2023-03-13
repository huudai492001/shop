<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('home', [BaseController::class, 'home'])->name('home');
Route::get('specials_offer', [BaseController::class, 'specials_offer'])->name('specials.offer');
Route::get('delivery', [BaseController::class, 'delivery'])->name('delivery');
Route::get('contact', [BaseController::class, 'contact'])->name('contact');
Route::get('cart', [BaseController::class, 'cart'])->name('cart');
Route::get('productView', [BaseController::class, 'productView'])->name('productView');

// Admin controller
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'makeLogin'])->name('admin.makeLogin');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

//Category Controller
Route::get('category/add',[CategoryController::class, 'create'])->name('admin.create');
Route::post('category/add',[CategoryController::class, 'store'])->name('admin.store');


Route::get('category/list',[CategoryController::class, 'index'])->name('admin.list');
Route::get('category/edit/{id}',[CategoryController::class, 'edit'])->name('admin.edit');
Route::post('category/update/{id}',[CategoryController::class, 'update'])->name('admin.update');
Route::post('category/delete',[CategoryController::class, 'destroy'])->name('admin.delete');

//Product Controller
Route::get('product', [ProductController::class, 'index'])->name('product.list');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
Route::post('product/update', [ProductController::class, 'update'])->name('product.update');

Route::get('product/details/{id}', [ProductController::class, 'extralDetails'])->name('product.extralDetails');
Route::get('product/details/{id}', [ProductController::class, 'extralDetailsStore'])->name('product.extralDetailsStore');







