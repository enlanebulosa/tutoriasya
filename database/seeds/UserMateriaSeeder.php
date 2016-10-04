<?php

use Illuminate\Database\Seeder;
use App\Materia;
use App\User;
class UserMateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $minuser= User::all()->min('id');
        $maxuser = User::all()->max('id');
        $minmateria = Materia::all()->min('id');
        $maxmateria = Materia::all()->max('id');
        for ($i=1;$i<10;$i++){
            $user = User::find(rand($minuser,$maxuser));
            $user->materias()->attach(rand($minmateria,$maxmateria));
        }
        
    }
}
