<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'Personas';
    protected $primaryKey ='id_persona';
    protected $fillable = ['nombre', 'ap_paterno', 'ap_materno', 'dir', 'telefono'];
    public $timestamps = false;
}
