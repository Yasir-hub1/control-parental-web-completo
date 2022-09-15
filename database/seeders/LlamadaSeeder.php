<?php

namespace Database\Seeders;

use App\Models\Llamada\Llamada;
use Illuminate\Database\Seeder;

class LlamadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $llamadas = [
            [
                'aceptada' =>true,
                'fecha' =>  '2015-11-01 14:10:00',
                'tiempo' => '00:00:45',
                'contacto_id' => 1,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-11-01 19:30:00',
                'tiempo' => '00:00:00',
                'contacto_id' => 1,
            ],
            [
                'aceptada' =>true,
                'fecha' =>  '2015-12-01 11:08:21',
                'tiempo' => '00:02:45',
                'contacto_id' => 2,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-12-16 13:12:00',
                'tiempo' => '00:01:45',
                'contacto_id' => 2,
            ],
            [
                'aceptada' =>false,
                'fecha' =>  '2015-12-21 08:10:00',
                'tiempo' => '00:00:00',
                'contacto_id' => 1,
            ],
        ];
        foreach ($llamadas as $llamada) {
            Llamada::create($llamada);
        }
    }
}
