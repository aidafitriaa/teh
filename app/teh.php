<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teh extends Model
{
    protected $filelable = ['nama_teh','nutrisi_teh','foto'];
    public $timestamps = true;
}
