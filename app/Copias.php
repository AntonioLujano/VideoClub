<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copias extends Model
{
    protected $table = 'copias';
    protected $primaryKey ='id_copia';
    protected $fillable = ['id_pelicula'];
    public $timestamps = false;
}
