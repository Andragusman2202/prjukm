<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_ukm';
    protected $fillable = ['nama_ukm','bio_ukm','visi','misi','tgl_berdiri','logo_file'];

}
