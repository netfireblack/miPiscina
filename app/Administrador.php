<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = 'ADMINISTRADOR';     // Atacar tabla 'ADMINISTRADOR' y no 'Administradores'

    public $timestamps = false;             // Desactivar timestamps al insertar a la DB    

    protected $fillable = [                 // Dejar que el usuario pueda introducir estos parametros
        'nombre','apellido','correo','contrasena','direccion'
    ];
    
    // Relaciones

    public function piscinas()
    {
        return $this->hasMany('App\Psicina','ID_ADMIN','ID_ADMIN');
    }
}
