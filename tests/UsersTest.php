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
     *
     *
     */

    protected $nombre = 'Javier';
    protected $apellido = 'Cicchino';
    protected $dni = '33';
    protected $tipo = 'Administrador';
    protected $email= 'javier@jajaja.com';
    protected $password = '123456';


    public function testRegisterUsers()
    {
        $this->visit('/register')
            ->type($this->nombre,'nombre')
            ->type($this->apellido,'apellido')
            ->type($this->dni,'dni')
            ->select($this->tipo,'tipo')
            ->type($this->email,'email')
            ->type($this->password,'password')
            ->type($this->password,'password_confirmation')
            ->press('Registrarse')
            ->seePageIs('/home');
    }

    public function testLoginUser()
    {
        $this->visit('/login')
            ->type($this->email,'email')
            ->type($this->password,'password')
            ->press('Login')
            ->see('You are logged in!');
    }
}
