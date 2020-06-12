<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = 'paquete';
    protected $fillable = [
        'destino', 'descripcion', 'fechainicial', 'fechafinal', 'precio'
    ];
    
    public function ventas() {
        return $this->hasMany('App\Venta');
    }
}
