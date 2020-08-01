<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socios extends Model
{
    protected $table = 'Socios';
    protected $primaryKey ='id_socio';
    protected $fillable = ['name', 'ap_paterno', 'ap_materno', 'dir', 'telefono', 'email', 'password', 'ine', 'domicilio'];
    public $timestamps = false;
}
