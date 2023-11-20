<?php

use App\Http\Controllers\BurgerkingController;
use App\Http\Controllers\HolyteaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WingstoppController;
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

Route::get('/holytea/holytea', [HolyteaController::class, 'index']);
Route::get('/holytea/detailholytea/{holytea}',[HolyteaController::class, 'show']);