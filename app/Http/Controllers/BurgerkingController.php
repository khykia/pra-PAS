<?php

namespace App\Http\Controllers;

use App\Models\Burgerking;
use Illuminate\Http\Request;

class BurgerkingController extends Controller
{
    public function index()
    { 
        return view('burgerkings.burgerking', [
            "title" => "produk_burgerking",
            "burgers" => Burgerking::all()
        ]);
    }

    public function show($produk)
    {
        return view('burgerkings.detailburger',[
            "title" => "detail_burgerking",
            "buurger" => Burgerking::find($produk)
        ]);
    }
}
