@extends('layouts.main')

@section('container')
    <div class="">
        <h2>Detail Holy Tea</h2>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Exp Date</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>{{ $holytea->id }}</td>
                <td>{{ $holytea->nama }}</td>
                <td>{{ $holytea->jenis }}</td>
                <td>{{ $holytea->harga }}</td>
            </tr>
        </table>
    </div>
@endsection