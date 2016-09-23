<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class usuariosrandomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker=Faker::create();
    	for($i=0; $i<50; $i++){
    		DB::table('users')->insert (array(
    			'nombre' =>$faker-> firstNameFemale,
    			'apellido' =>$faker-> firstNameFemale,
    			'dni'=> rand(0000000, 99999999),
    			'email'=> $faker-> firstNameFemale.'@gmail.com',
    			'tipo'=>$faker-> randomElement (['profesor','administrador', 'alumno']),
    			'password'=>bcrypt('secret'),
    			

    		));
    	}
       
    }
}
