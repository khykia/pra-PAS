@extends('layouts.main')

@section('container')
    {{$product->id}} <br>
    {{$product->produk}} <br>
    {{$product->nama_produk}} <br>
    {{$product->jenis_produk}} <br>
    {{$product->alamat}} <br>
    {{$product->harga}} <br>

    <a href="/products/all">back</a>
@endsection