<?php

use Illuminate\Database\Seeder;
use App\Zona;
use Maatwebsite\Excel\Facades\Excel;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Excel::load('public/zonas.csv', function($reader) {
 
        foreach ($reader->get() as $zona) {
            Zona::create([
                'descripcion' => $zona->desc,
                'partido' =>$zona->par,
                'localidad'=>$zona->loc
            ]);
        }
        });
    }
}
