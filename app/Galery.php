<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_galery';
    protected $fillable = ['id_ukm','file','judul','tgl_galery','keterangan'];
}
