<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicion extends Model
{
    protected $table = 'MEDICIONES';      // Atacar tabla 'MEDICIONES'
    
    public $timestamps = false;             // Desactivar timestamps al insertar a la DB
    
    protected $filable = [                  // Dejar que el usuario pueda introducir estos parametros
    
    ];

    // Relaciones

    public function raspberry()
    {
        return $this->belongsTo('App\Raspberry','ID_RASPBERRY','ID_RASPBERRY');
    }
}
