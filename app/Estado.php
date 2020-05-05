<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'ESTADO';            // Atacar tabla 'ESTADO'
    
    public $timestamps = false;             // Desactivar timestamps al insertar a la DB
    
    protected $filable = [                  // Dejar que el usuario pueda introducir estos parametros
    
    ];

    // Relaciones

    public function raspberrys()
    {
        return $this->hasMany('App\Raspberry','ESTADO','ESTADO');
    }
}
