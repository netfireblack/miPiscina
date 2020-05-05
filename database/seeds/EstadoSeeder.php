<?php

use App\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');   // Desactivar comprovación de claves foraneas
        Estado::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');   // Activar comprovación de claves foraneas

        Estado::create([
            'estado'=> 0
        ]);

        Estado::create([
            'estado'=> 1
        ]);
    }
}
