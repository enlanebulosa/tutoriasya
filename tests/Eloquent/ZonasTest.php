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
    public function testExample()
    {
        //$this->assertTrue(true);
        for ($x = 0; $x <= 10; $x++){
            factory(Zona::class)->create( );
        }
        $zonas = Zona::all();
        $this->assertCount(11,$zonas);

    }
}
