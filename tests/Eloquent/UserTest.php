<?php

use App\User;
use App\Materia;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
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
        //factory(User::class)->create( ['nombre' => 'pepe' , 'apellido'=>'perez' , 'email'=>'perez@gmail.com' , 'dni'=>'12341234' , 'password'=>'secret' ]);
        factory(User::class)->create( ['nombre' => 'pepe' , 'tipo' => 'profesor']);
        $users = User::all();
        //factory(Materia::class)->create(['nombre' => 'lengua' , 'nivel'=>'primario']);
        //$materias = Materia::all();
        $this->assertCount(1,$users);
        //$this->assertCount(1,$materias);
        //$this->assertEquals('pepe',User::)

    }
}
