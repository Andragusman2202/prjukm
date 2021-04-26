<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_agenda';
    protected $fillable = ['id_ukm','judul_agenda','isi_agenda','tgl_agenda'];

}
