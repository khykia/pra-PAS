@extends('layouts.main')

@section('container')
<a href="/produk/burgerkings">back</a>

<table class="table">
    <tr>
        <th>NO</th>
        <td>{{ $burger->id }}</td>
    </tr>
    <tr>
        <th>NAMA</th>
        <td>{{ $burger->nama }}</td>
    </tr>
    <tr>
        <th>JENIS</th>
        <td>{{ $burger->jenis }}</td>
    </tr>
    <tr>
        <th>HARGA</th>
        <td>{{ $burger->harga }}</td>
    </tr>
</table>


@endsection