<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaEsperas extends Model
{
    protected $table='listaespera';

    protected $fillable  = ['fecha_registro','id_pelicula','id_socio','estado'];

    protected $PK = 'id_espera';
}    
