@extends('layouts.main')

@section('container')
    <h1>Data Produk Restoran Burger King dan Wingstop</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Product</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Jenis</th>
            <th scope="col">Alamat</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product["Id"]}}</td>
                <td>{{$product["produk"]}}</td>
                <td>{{$product["nama_produk"]}}</td>
                <td>{{$product["jenis_produk"]}}</td>
                <td>{{$product["alamat"]}}</td>
                <td>{{$product["harga"]}}</td>
                <td>
                    <a type="button" class="btn btn-primary" href="/product/detail/{{$product['Id']}}">Detail</a>
                    <a type="button" class="btn btn-warning">Edit</a>
                    <a type="button" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
