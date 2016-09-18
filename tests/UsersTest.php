<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
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
            ->type('Cicchino','apellido')
            ->type('28869140','dni')
            ->select('administrador','tipo')
            ->type('javiercicchino@gmail.com','email')
            ->type('asdfg','password')
            //->type('asdfgh','password-confirm')
            ->press('Registrarse');
            //->seePageIs('/home');

    }

    public function testLoginUser() {

        $this->visit('/login')
            ->type('ja@ho.com','email')
            ->type('123456','password')
            ->press('Login');
            //->seeText('You are logged in!');

    }
}
