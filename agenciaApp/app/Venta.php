<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';
    
    protected $fillable = [
        'idpaquete', 'iduser', 'precio', 'fecha', 'pax'
    ];
    
    public function paquete() {
        return $this->belongsTo('App\Paquete', 'idpaquete');
    }
    
    public function user() {
        return $this->belongsTo('App\User', 'iduser');
    }
}
