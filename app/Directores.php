<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directores extends Model
{
    protected $table = 'Directores';
    protected $primaryKey ='id_director';
    protected $fillable = ['nombre_dire','ap_paterno','ap_materno'];
    public $timestamps = false;
}
