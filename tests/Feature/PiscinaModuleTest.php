<?php

namespace Tests\Feature;

use App\Piscina;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PiscinaModuleTest extends TestCase
{

    /** @test */
    public function muestra_piscinas_index()
    {
        // Volver a correr el seeder de piscina para limpiar los datos y generar datos de prueba
        $this->artisan('db:seed --class=PiscinaSeeder'); 

        factory(Piscina::class)->create([
            'nombre'    =>  'Piscina A',
            'condicion' =>  '1'
        ]);

        factory(Piscina::class)->create([
            'nombre'    =>  'Piscina B', 
            'condicion' =>  '3'
        ]);

        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Piscina A')
            ->assertSee('Piscina A');
    }

    /** @test */
    public function mensaje_default_no_piscinas_index()
    {
        Piscina::truncate();
        
        $this->get('/')
        ->assertStatus(200)
        ->assertSee('No hay piscinas registradas');

        $this->assertEquals(0, Piscina::count());
    }
    
    
}
