<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'Peliculas';
    protected $primaryKey = 'id_pelicula';
    protected $fillable = ['titulo','id_director','id_persona'];
    protected $timestamp = false;
}

//Quey Scope

public function scopeName($query, $titulo){
	if($titulo)
		return $query->where('titulo', 'LIKE', "%$titulo%");
}