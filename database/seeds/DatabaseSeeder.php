<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(usuariosrandomSeeder::class);
        $this->call(dbseed::class);
        $this->call(MateriaSeeder::class);
        $this->call(ZonasSeeder::class);
    }
}
