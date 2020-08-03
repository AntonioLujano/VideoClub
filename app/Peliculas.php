<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    //
    protected $table='peliculas';
    protected $primaryKey='id_pelicula';
    protected $fillable=['titulo','id_director','id_genero', 'cantidad'];

    function getDirector(){
        return $this->hasMany("App\Directores",'id_director','id_director');
    }
    function getGenero(){
        return $this->hasMany("App\Generos",'id_genero','id_genero');
    }
    public $timestamps=false;
}

