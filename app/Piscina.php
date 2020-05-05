<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piscina extends Model
{
    protected $table = 'PISCINA';           // Atacar tabla 'PISCINA'
    
    public $timestamps = false;             // Desactivar timestamps al insertar a la DB
    
    protected $filable = [                  // Dejar que el usuario pueda introducir estos parametros
    
    ];

    // Relaciones

    public function administrador()
    {
        return $this->belongsTo('App\Administrador','ID_ADMIN', 'ID_ADMIN');
    }

    public function condicion()
    {
        return $this->belongsTo('App\CondicionPiscina','CONDICION', 'CONDICION');
    }

    public function raspberry()
    {
        return $this->hasOne('App\Raspberry', 'ID_RASPBERRY', 'ID_RASPBERRY');
    }
}
