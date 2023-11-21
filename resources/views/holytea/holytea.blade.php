@extends('layouts.main')

@section('container')
<div class=""> </div>

<table class="table">
    <thead>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Exp Date</td>
        <td>Harga</td>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($holytea as $key => $datas)
      <tr>
        <td>{{ $key + 1}}</td>
        <td>{{ $datas->nama}}</td>
        <td>{{ $datas->jenis}}</td>
        <td>{{ $datas->harga}}</td>
        <td>
          <a type="button" class="btn btn-primary" href="/holytea/detailholytea/{{$datas->id}}">Detail</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table> 

@endsection