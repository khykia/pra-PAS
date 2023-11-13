<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;    

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "Rizkia Khosy Amalia W.",
        "kelas" => "11 PPLG 2",
        "foto" => "images/foto_saya.jpeg"
    ]);
});

Route::get('/student/all', [StudentsController::class, 'index']);
Route::get('/student/detail/{students}', [StudentsController::class, 'show']);