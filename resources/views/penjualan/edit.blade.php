@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PT.QTASNIM DIGITAL TEKNOLOGI') }}</div>

                <div class="card-body">
<h1>Edit Data Penjualan</h1>
<form action="/penjualan/{{ $dtlpenjualan->id }}" method="POST">
    @method('put')
    @csrf
    <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" value="{{ $dtlpenjualan->nama_barang }}" required><br>
    <input class="form-control" type="number" name="stok" placeholder="Stok" value="{{ $dtlpenjualan->stok }}" required><br>
    <input class="form-control" type="number" name="jumlah_terjual" placeholder="Jumlah Terjual" value="{{ $dtlpenjualan->jumlah_terjual }}" required><br>
    <input class="form-control" type="date" name="tanggal_transaksi" placeholder="Tanggal Transaksi" value="{{ $dtlpenjualan->tanggal_transaksi }}" required><br>
    <input class="form-control" type="text" name="jenis_barang" placeholder="Jenis Barang" value="{{ $dtlpenjualan->jenis_barang }}" required><br>
    <input class="btn btn-primary" type="submit" name="submit" value="Update">
</form>
</div>
</div>
</div>
</div>
</div>
@endsection