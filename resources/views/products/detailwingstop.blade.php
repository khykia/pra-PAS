@extends('layouts.main')

@section('container')
<a href="/wingstop">back</a>

<table class="table">
    <tr>
        <th>NO</th>
        <td>{{ $product->id }}</td>
    </tr>
    <tr>
        <th>NAMA</th>
        <td>{{ $product->nama }}</td>
    </tr>
    <tr>
        <th>JENIS</th>
        <td>{{ $product->jenis }}</td>
    </tr>
    <tr>
        <th>HARGA</th>
        <td>{{ $product->harga }}</td>
    </tr>
</table>


@endsection