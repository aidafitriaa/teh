<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['id_teh','nama','jumlah_teh'];
    public $timestamps = true;

    public function teh()
    {
        return $this->belongsTo('App\teh', 'id_teh');
    }
}
