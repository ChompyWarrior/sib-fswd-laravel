<?php

use App\Http\Controllers\Api\ApiProdukController as ApiApiProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//CRUD API PRODUK
Route::get('/produk', [ApiApiProdukController::class,'index']);
Route::post('/tambah-data-produk', [ApiApiProdukController::class, 'tambah']);
Route::put('/update-data-produk', [ApiApiProdukController::class, 'update']);
Route::get('/hapus-data-produk/{id}', [ApiApiProdukController::class, 'hapus']);

