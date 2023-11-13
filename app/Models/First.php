<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product
{
    private static $product = [
        [
            "Id" => 1,
            "produk" => "Burger Kings",
            "nama_produk" => "Whopper Meal",
            "jenis_produk" => "Burger",
            "alamat" => "Alamat A",
            "harga" => 10.99,
        ],
        [
            "Id" => 2,
            "produk" => "Burger Kings",
            "nama_produk" => "Chicken Fries",
            "jenis_produk" => "Chicken",
            "alamat" => "Jl. Contoh Blok B2",
            "harga" => 5.49,
        ],
        [
            "Id" => 3,
            "produk" => "Burger Kings",
            "nama_produk" => "Wingstop Combo",
            "jenis_produk" => "Chicken Wings",
            "alamat" => "Jl. Contoh Blok C3",
            "harga" => 11.99,
        ],
        [
            "Id" => 4,
            "produk" => "Burger Kings",
            "nama_produk" => "Cheeseburger",
            "jenis_produk" => "Burger",
            "alamat" => "Jl. Contoh Blok D4",
            "harga" => 7.99,
        ],
        [
            "Id" => 5,
            "produk" => "Burger Kings",
            "nama_produk" => "Fries",
            "jenis" => "Sides",
            "alamat" => "Jl. Contoh Blok E5",
            "harga" => 3.99,
        ]
    ];
        public static function all()
        {
            return self::$product;
        }
}
