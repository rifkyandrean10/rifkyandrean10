<?php

use App\Http\Controllers\contohController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contoh',  [contohController::class, 'TampilContoh']);
Route::get('/produk', [produkController::class, 'ViewProduk']);
Route::get('/produk/add', [produkController::class, 'ViewAddProduk']);
Route::post('/produk/add', [produkController::class, 'CreateProduk']);

Route::delete('/produk/delete/{kode_produk}', [produkController::class, 'DeleteProduk']);
Route::get('/produk/edit/{kode_produk}', [produkController::class, 'ViewEditProduk']);
Route::put('/produk/edit/{kode_produk}', [produkController::class, 'UpdateProduk']);
