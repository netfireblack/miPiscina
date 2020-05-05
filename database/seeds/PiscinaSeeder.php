<?php

use App\Piscina;
use Illuminate\Database\Seeder;

class PiscinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');   // Desactivar comprovación de claves foraneas
        Piscina::truncate();                            // Eliminar datos de la tabla
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');   // Activar comprovación de claves foraneas

        factory(Piscina::class, 3)->create();           // Crear 3 piscinas de prueba.
    }
}
