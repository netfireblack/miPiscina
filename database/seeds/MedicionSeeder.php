<?php

use App\Medicion;
use Illuminate\Database\Seeder;

class MedicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');   // Desactivar comprovación de claves foraneas
        Medicion::truncate();                           // Eliminar datos de la tabla
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');   // Activar comprovación de claves foraneas

        factory(Medicion::class, 50)->create();         // Crear 50 mediciones de prueba.
    }
}
