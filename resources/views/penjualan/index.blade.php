@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PT.QTASNIM DIGITAL TEKNOLOGI') }}
                <div class="card-body">
<h1>DATA PENJUALAN BARANG</h1>

<div class="card-tools" style="display: flex;">
    <a class="btn btn-primary" href="/penjualan/create">Tambah Barang</a>
        <form action="/penjualan/search" class="form-inline" method="get">
        <input type="search" name="search" class="form-control float-right" placeholder="Cari" style="margin-left:470px">

        <div class="input-group-append">
            <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>
</div>
</br>
<table class="table table-dark">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Jumlah Terjual</th>
        <th>Tanggal Transaksi</th>
        <th>Jenis Barang</th>
        <th>Aksi</th>
    </tr>
    </thead>
    @foreach ($dtlpenjualan as $m)
    <tbody>
        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->nama_barang }}</td>
            <td>{{ $m->stok }}</td>
            <td>{{ $m->jumlah_terjual }}</td>
            <td>{{ $m->tanggal_transaksi }}</td>
            <td>{{ $m->jenis_barang }}</td>
            <td>
                <div class="btn-group">
                <a class="btn btn-warning" href="/penjualan/{{ $m->id }}/edit">Edit</a>
                <form action="/penjualan/{{ $m->id }}" method="POST">
                @method('delete')
                @csrf
                <input class="btn btn-danger" type="submit" name="submit" value="Delete">
                </form>
                </div>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection