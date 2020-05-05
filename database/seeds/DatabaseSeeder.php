<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstadoSeeder::class);
        $this->call(CondicionPiscinaSeeder::class);
        $this->call(AdministradorSeeder::class);
        $this->call(RaspberrySeeder::class);
        $this->call(PiscinaSeeder::class);
        //$this->call(MedicionSeeder::class);
    }
}
