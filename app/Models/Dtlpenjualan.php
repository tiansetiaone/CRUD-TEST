<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Dtlpenjualan extends Model
{
    use HasFactory;
    use Sortable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'dtlpenjualan';
    protected $guarded = [];

    public $sortable = [
        'nama_barang','tanggal_transaksi',
    ];

    // public function category()
    // {
    //     return $this->belongsTo('AppCategory');
    // }

}
