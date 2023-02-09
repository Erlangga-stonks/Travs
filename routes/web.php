<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
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

Route::get('/category/beauty_product', function () {
    return view('category.beauty_product');
});

Route::get('/', [GuestController::class, 'dashboard'])->name('index');
Route::post('/search', [GuestController::class, 'search'])->name('search');
Route::post('/view-all', [GuestController::class, 'search'])->name('view-all');
Route::get('/view-all', [GuestController::class, 'search'])->name('view-all');
Route::get('/product/{id}', [GuestController::class, 'product'])->name('product');
Route::get('/user/dashboard', [UserController::class, 'index'])->middleware('isUser')->name('user-dashboard');
Route::get('/user/dashboard/detail/{id}', [UserController::class, 'detail'])->middleware('isUser')->name('user-dashboard-detail');
Route::get('/user/cart', [UserController::class, 'cart'])->middleware('isUser')->name('user-cart');
Route::post('/user/cart', [UserController::class, 'storeCart'])->middleware('isUser');
Route::get('/user/cart/delete/{id}', [UserController::class, 'deleteCart'])->middleware('isUser')->name('user-cart-delete');
Route::get('/user/cart/Payment',[UserController::class, 'PaymentCont'])->middleware('isUser')->name('user-Payment');
Route::post('/user/cart/process', [UserController::class, 'processCart'])->middleware('isUser')->name('user-cart-process');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('isAdmin')->name('admin-dashboard');
Route::get('/admin/product', [AdminController::class, 'product'])->middleware('isAdmin')->name('admin-product');
Route::get('/admin/create-product', [AdminController::class, 'createProduct'])->middleware('isAdmin')->name('admin-create-product');
Route::post('/admin/create-product', [AdminController::class, 'storeProduct'])->middleware('isAdmin');
Route::get('/admin/update-product/{id}', [AdminController::class, 'updateProduct'])->middleware('isAdmin')->name('admin-update-product');
Route::post('/admin/update-product', [AdminController::class, 'storeUpdateProduct'])->middleware('isAdmin');
Route::get('/admin/delete-product/{id}', [AdminController::class, 'deleteProduct'])->middleware('isAdmin')->name('admin-delete-product');
Route::get('/admin/transaction', [AdminController::class, 'transaction'])->middleware('isAdmin')->name('admin-transaction');
Route::get('/admin/transaction/detail/{id}', [AdminController::class, 'transactionDetail'])->middleware('isAdmin')->name('admin-transaction-detail');
Route::get('/admin/transaction/accept/{id}', [AdminController::class, 'acceptTransaction'])->middleware('isAdmin')->name('admin-transaction-accept');
Route::get('/admin/profile/{id}', [Controller::class, 'indexUpdateProfile'])->middleware('auth')->name('profile');
Route::post('/profile', [Controller::class, 'updateProfile'])->middleware('auth');

require __DIR__ . '/auth.php';