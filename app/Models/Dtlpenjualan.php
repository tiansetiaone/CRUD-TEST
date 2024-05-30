<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Dtlpenjualan extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'dtlpenjualan';
    protected $guarded = [];

    public $sortable = [
        'nama_barang','tanggal_transaksi',
    ];
}
