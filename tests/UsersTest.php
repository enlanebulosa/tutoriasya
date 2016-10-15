<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    // Con esta opcion se hace migracion cada vez que se ejecuta un test
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     *
     *
     */

    // Se definen las variables que contienen los datos para probar usuarios
    protected $nombre = 'Walter';
    protected $apellido = 'White';
    protected $dni = '21212121';
    protected $tipo = 'profesor';
    protected $email= 'walter.white@yahoo.com';
    protected $password = 'heinseberg';

    // Funcion que prueba el registro de un usuario nuevo
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
            ->seePageIs('/login')
            //->visit('/home#')
            //->visit('/logout')
            //->click('navbar-toogle')
            //->press('dropdown')
            //->click('Logout')
            //->visit('/login')
            ->type($this->email,'email')
            ->type($this->password,'password')
            ->press('Entrar')
            ->see('Bienvenido');
    }

    //Funcion que prueba el login de un usuario
    /*
    public function testLoginUser()
    {
        $this->visit('/login')
            ->type($this->email,'email')
            ->type($this->password,'password')
            //->type('jas@ho.com','email')
            //->type('123456','password')
            ->press('Login')
            ->see('You are logged in!');
    }
*/
}
