<?php

use App\Http\Controllers\BurgerkingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use App\Http\Controllers\WardahController;
use App\Http\Controllers\WingstoppController;
use App\Models\Wardah;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title"  => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"  => "about"
    ]);
});

Route::get('/products/wingstop', [wingstoppController::class, 'index']);
Route::get('/products/detailwingstop/{product}',[wingstoppController::class, 'show']);


Route::get('/burgerkings/burgerking', [BurgerkingController::class, 'index']);
Route::get('/burgerkings/detailburger/{burgerking}',[BurgerkingController::class, 'show']);