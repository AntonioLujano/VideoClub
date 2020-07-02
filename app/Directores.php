<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directores extends Model
{
    protected $table = 'Directores';
    protected $primaryKey = 'id_director';
    protected $fillable = ['id_persona'];
    protected $timestamp = false;
}
