<?php

namespace Database\Seeders;

use App\Models\Hijo\Hijo;
use Illuminate\Database\Seeder;

class hijoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hijos = [
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'edad' => '15',
            ],
            [
                'name' =>'Fabricio',
                'apellido' => 'Espinoza',
                'celular' => '8965414',
                'alias' => 'fabrichito',
                'edad' => '15',
            ],
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'edad' => '15',
            ],
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'edad' => '15',
            ],
            [
                'name' =>'Miguel',
                'apellido' => 'Robledo',
                'celular' => '32457869',
                'alias' => 'miguelito',
                'edad' => '15',
            ],
            [
                'name' =>'Miguel Angel',
                'apellido' => 'Escobar Robledo',
                'celular' => '32457869',
                'alias' => 'angelito',
                'edad' => '15',
            ],
            [
                'name' =>' Fernando Fabricio',
                'apellido' => 'Espinoza Raiz',
                'celular' => '8965414',
                'alias' => 'fabrichito',
                'edad' => '15',
            ],
            [
                'name' =>'Humberto',
                'apellido' => 'Ricaldes',
                'celular' => '32457869',
                'alias' => 'humbertito',
                'edad' => '15',
            ],
            [
                'name' =>'Horlando',
                'apellido' => 'Humeres',
                'celular' => '32457869',
                'alias' => 'horlandito',
                'edad' => '15',
            ],
            [
                'name' =>'Raul',
                'apellido' => 'Celaya',
                'celular' => '32457869',
                'alias' => 'raulito',
                'edad' => '15',
            ],
        ];
        foreach ($hijos as $hijo) {
            Hijo::create($hijo);
        }
    }
}
