<?php

// namespace App\Http\Controllers;

use App\Http\Controllers\ApiCustomerController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;

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

// Route::get('/', function () {
//     return view('index');
// });

// Product Interface
Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products'])->middleware('auth');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);

// Login route
Route::get('login', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('login');
Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'authenticate']);

// Logout Route
Route::post('/logout', [App\Http\Controllers\Admin\LogoutController::class, 'logout'])->middleware('auth');

// Register Route
Route::get('/register', [App\Http\Controllers\Admin\RegisterController::class, 'index']);
Route::post('/register', [App\Http\Controllers\Admin\RegisterController::class, 'store']);

Route::prefix('admin')->middleware('auth','isAdmin')->group(function () {
    // Dashboard
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // CRUD Sliders
    Route::get('/sliders', [App\Http\Controllers\Admin\SliderController::class, 'index']);
    Route::get('/sliders/create', [App\Http\Controllers\Admin\SliderController::class, 'create']);
    Route::post('/sliders-create', [App\Http\Controllers\Admin\SliderController::class, 'store']);

    // CRUD Kategori
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('/edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('/update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']);


    // CRUD Produk
    Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index']);
    Route::get('/add-product-data', [App\Http\Controllers\Admin\ProductController::class, 'add']); 
    Route::post('/store-product-data', [App\Http\Controllers\Admin\ProductController::class, 'store']);
    Route::get('/edit-product-data/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit']);
    Route::put('/update-product-data/{id}', [App\Http\Controllers\Admin\ProductController::class, 'update']);
    Route::get('/delete-product-data/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);


    // // CRUD pelanggan
    // Route::get('/pengguna', [App\Http\Controllers\Admin\PenggunaController::class, 'index']);
    // Route::get('/tambah-data-pengguna', [App\Http\Controllers\Admin\PenggunaController::class, 'tambah']);
    // Route::post('/simpan-data-pengguna', [App\Http\Controllers\Admin\PenggunaController::class, 'simpan']);
    // Route::get('/ubah-data-pengguna/{id}', [App\Http\Controllers\Admin\PenggunaController::class, 'ubah']);
    // Route::put('/update-data-pengguna', [App\Http\Controllers\Admin\PenggunaController::class, 'update']);
    // Route::get('/hapus-data-pengguna/{id}', [App\Http\Controllers\Admin\PenggunaController::class, 'hapus']);

});

