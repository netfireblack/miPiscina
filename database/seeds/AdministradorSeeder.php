<?php

use \App\Administrador;
use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');   // Desactivar comprovación de claves foraneas
        Administrador::truncate();                      // Eliminar datos de la tabla
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');   // Activar comprovación de claves foraneas

        factory(Administrador::class, 3)->create();    // Crear 10 administradores de prueba.
    }
}
