<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\teh;

class kategori extends Model
{

     protected $fillable = ['nama_kategori','slug'];
    public $timestamps = true;

    public function teh()
    {
        return $this->hasMany('App\teh','id_teh');
    }
}
