<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{

    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */






    public function testRegisterUsers()
    {
        /*
        $this->assertTrue(true);
        */
        $this->visit('/register')
            ->type('Javier','nombre')
            ->type('Cicchineo','apellido')
            ->type('28869130','dni')
            ->select('administrador','tipo')
            ->type('javiercicchino1@gmail.com','email')
            ->type('asdfgh','password')
            ->type('asdfgh','password_confirmation')
            ->press('Registrarse')
            ->seePageIs('/home');
            //->;

    }

    public function testLoginUser() {

        $this->visit('/login')
            ->type('javiercicchino1@gmail.com','email')
            ->type('asdfgh','password')
            ->press('Login')
            ->see('You are logged in!');

    }
}
