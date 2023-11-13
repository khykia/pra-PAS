@extends('layouts.main')

@section('container')
   <h1>Ini adalah halaman produk</h1>
<table class="table">
  <thead>
    <tr>
      <td>No</td>
      <td>Nama</td>
      <td>Jenis</td>
      <td>Harga</td>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($products as $key => $data)
    <tr>
      <td>{{ $key + 1 }}</td>
      <td>{{ $data->nama}}</td>
      <td>{{ $data->jenis }}</td>
      <td>{{ $data->harga }}</td>
      <td>
        <a type="button" class="btn btn-primary" href="/products/detailwingstop/{{$data->id}}">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection
