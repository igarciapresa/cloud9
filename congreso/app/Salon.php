<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = "salon";
    
    
    //id-existe si no digo nada
    //created_at y deleted_at - existen si no digo nada
    protected $fillable = [
            'nombre',
            'capacidad',
            'ubicacion'
        ];
}
