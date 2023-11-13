<?php

namespace App\Http\Controllers;

use App\Models\Wingstopps;
use Illuminate\Http\Request;

class WingstoppController extends Controller
{
    public function index()
    { 
        return view('products.wingstop', [
            "title" => "produk_wingstopp",
            "products" => wingstopps::all()
        ]);
    }

    public function show($produk)
    {
        return view('products.detailwingstop',[
            "title" => "detail_wingstop",
            "product" => wingstopps::find($produk)
        ]);
    }
}
