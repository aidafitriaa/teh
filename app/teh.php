<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori;

class teh extends Model
{
    protected $fillable = ['nama_teh','nutrisi_teh','harga_teh','id_kategori','gambar'];
    public $timestamps = true;

     public function kategori()
    {
        return $this->belongsTo('App\kategori','id_kategori');
    }
    public function transaksi()
    {
        return $this->hasMany('App\transaksi','id_teh');
    }
    public function stok()
    {
        return $this->hasMany('App\stok','id_teh');
    }

}
