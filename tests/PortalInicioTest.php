<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PortalInicioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*
    public function testExample()
    {
        $this->assertTrue(true);
    }
    */
    public function testPressButtonLogin() {

        $this->visit('/')
            ->click('Login')
            ->seePageIs('/login');

    }

    public function testPressButtonRegister() {

        $this->visit('/')
            ->click('Register')
            ->seePageIs('register');
    }
}
