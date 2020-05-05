<?php

use App\Raspberry;
use Illuminate\Database\Seeder;

class RaspberrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');   // Desactivar comprovación de claves foraneas
        Raspberry::truncate();                          // Eliminar datos de la tabla
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');   // Activar comprovación de claves foraneas

        factory(Raspberry::class, 3)->create();         // Crear 3 raspberrys de prueba.
    }
}
