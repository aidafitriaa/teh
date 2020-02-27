<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\teh;

class stok extends Model
{
    protected $fillable = ['id_teh','jumlah_barang','barang_masuk','barang keluar','sisa_barang'];
    public $timestamps = true;

    public function teh()
    {
        return $this->belongsTo('App\teh', 'id_teh');
    }
}
