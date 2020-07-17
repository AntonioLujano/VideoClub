<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actores extends Model
{
    protected $table = 'Actores';
    protected $primaryKey ='id_actor';
    protected $fillable = ['nombre_act,ap_paterno,ap_materno'];
    public $timestamps = false;
}
