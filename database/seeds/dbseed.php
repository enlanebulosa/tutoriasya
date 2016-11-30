<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class dbseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker=Faker::create();
    	for($i=0; $i<25; $i++){
    		$user = User::create(array(
    			'nombre' =>$faker-> firstNameMale,
    			'apellido' =>$faker-> word,
    			'dni'=> rand(0000000, 99999999),
    			'email'=> $faker-> email,
    			'tipo'=>$faker-> randomElement (['profesor','administrador', 'alumno']),
    			'password'=>bcrypt('secret'),
          'verified'=>1,
    		));
                $user->save();
    	}

    }
}
