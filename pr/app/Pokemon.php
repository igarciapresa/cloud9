<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemon';

    protected $fillable = [
        'name', 'idtype', 'height', 'weight', 'ability'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function type() {
        return $this->belongsTo('App\Type', 'idtype');
    }
}
