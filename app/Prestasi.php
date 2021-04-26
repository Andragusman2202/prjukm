<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_prestasi';
    protected $fillable = ['id_ukm','nama_prestasi','judul','peringkat_prestasi','tgl_prestasi'];
}
