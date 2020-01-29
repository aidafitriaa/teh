<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengolahan extends Model
{
     protected $filelable = ['nama_teh','bahan_teh','proses','gambar'];
    public $timestamps = true;
}
