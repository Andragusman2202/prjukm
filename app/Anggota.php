<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_anggota';
    protected $fillable = ['id_ukm','id_struktur','nama_anggota','tgl_masuk','tgl_keluar','status','alasan_keluar'];
}
