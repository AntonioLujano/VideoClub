<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    public $table = 'Peliculas';
    public $primaryKey = 'id_pelicula';
    public $fillable = ['titulo','id_director','id_persona'];
    public $timestamp = false;
}
