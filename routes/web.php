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

Route::get('/wingstop', [wingstoppController::class, 'index']);
Route::get('/detailwingstop/{product}',[wingstoppController::class, 'show']);


Route::get('/burgerking', [BurgerkingController::class, 'index']);
Route::get('/detailburger/{burgerking}',[BurgerkingController::class, 'show']);

Route::get('/holytea', [HolyteaController::class, 'index']);
Route::get('/detailholytea/{holytea}',[HolyteaController::class, 'show']);