<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('student.all', [
            "title" => "Student",
            "students"=> Produk::all(),
        ]);
    }

    public function show($student)
    {
        return view('student.detail', [
            "title" => "Student",
            "students"=> Produk::find($student),
        ]);
    }
}
