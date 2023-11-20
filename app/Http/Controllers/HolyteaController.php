<?php

namespace App\Http\Controllers;

use App\Models\holyytea;
use Illuminate\Http\Request;

class HolyteaController extends Controller
{
    public function index()
    { 
        return view('holytea.holytea', [
            "title" => "produk_holytea",
            "holytea" => holyytea::all()
        ]);
    }

    public function show($produk)
    {
        return view('holytea.detailholytea',[
            "title" => "detail_hollytea",
            "holytea" => holyytea::find($produk)
        ]);
    }
}
