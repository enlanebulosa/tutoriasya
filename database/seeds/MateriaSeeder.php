<?php

use Illuminate\Database\Seeder;
use App\Materia;
use Maatwebsite\Excel\Facades\Excel;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Excel::load('public/materias.csv', function($reader) {

        foreach ($reader->get() as $materia) {
                Materia::create([
                        'nombre' => $materia->nom,
                        'nivel' =>$materia->niv

                ]);
        }
        });
    }
}
