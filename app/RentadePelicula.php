<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentadePelicula extends Model
{
    protected $table = 'Prestamos';
    protected $primaryKey ='id_prestamo';
    protected $fillable = ['fecha', 'id_socio'];
    public $timestamps = false;
}
