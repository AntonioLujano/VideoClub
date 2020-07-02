<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socios extends Model
{
    protected $table = 'Socios';
    protected $primaryKey ='id_socio';
    protected $fillable = ['id_persona'];
    public $timestamps = false;
}
