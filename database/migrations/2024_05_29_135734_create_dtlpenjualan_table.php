<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtlpenjualan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->integer('stok');
            $table->integer('jumlah_terjual');
            $table->date('tanggal_transaksi');
            $table->string('jenis_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dtlpenjualan');
    }
};
