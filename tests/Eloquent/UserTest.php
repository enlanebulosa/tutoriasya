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
    public function testUser()
    {
        // Se crean 10 usuarios con datos random y se testea que se carguen en la base de datos
        for ($x = 0; $x <= 9; $x++){
            factory(User::class)->create( );
        }
        $users = User::all();
        $this->assertCount(10,$users);


    }
}
