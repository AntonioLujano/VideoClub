<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generos extends Model
{
    protected $table = 'Generos';
    protected $primaryKey = 'id_genero';
    protected $fillable = ['des_gen'];
    protected $timestamp = false;
}
