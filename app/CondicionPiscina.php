<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CondicionPiscina extends Model
{
    protected $table = 'CONDICION_PISCINA';      // Atacar tabla 'CONDICION_PISCINA'
    
    public $timestamps = false;             // Desactivar timestamps al insertar a la DB
    
    protected $filable = [                  // Dejar que el usuario pueda introducir estos parametros
    
    ];

    // Relaciones

    public function piscinas()
    {
        return $this->hasMany('App\Piscina','CONDICION','CONDICION');
    }
}
