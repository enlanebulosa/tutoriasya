<?php

use App\Zona;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ZonasTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */

    use DatabaseMigrations;
    use DatabaseTransactions;


    /**
     *
     */
    public function testZonas()
    {
        // Se crean 10 zonas con datos random y se testea que se carguen en la base de datos
        for ($x = 0; $x <= 9; $x++){
            factory(Zona::class)->create( );
        }
        $zonas = Zona::all();
        $this->assertCount(10,$zonas);

    }
}
