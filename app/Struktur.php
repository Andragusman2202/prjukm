<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_struktur';
    protected $fillable = ['id_ukm','nama_struktur','level','sub_level'];

}
