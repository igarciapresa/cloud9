<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ponencia extends Model
{
    protected $fillable = [
        'descripcion', 'titulo', 'url'
    ];
}
