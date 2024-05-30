@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PT.QTASNIM DIGITAL TEKNOLOGI') }}</div>

                <div class="card-body">
<h1>Tambah Data Barang</h1>
<form action="/penjualan/store" method="POST">
    @csrf
    <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" required><br>
    <input class="form-control" type="number" name="stok" placeholder="Stok" required><br>
    <input class="form-control" type="number" name="jumlah_terjual" placeholder="Jumlah Terjual" required><br>
    <input class="form-control" type="date" name="tanggal_transaksi" placeholder="Tanggal Transaksi" required><br>
    <input class="form-control" type="text" name="jenis_barang" placeholder="Jenis Barang" required><br>
    <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
</form>
</div>
</div>
</div>
</div>
</div>
@endsection