<?php

namespace Database\Seeders;

use App\Models\Carpeta\Carpeta;
use Illuminate\Database\Seeder;

class CarpetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carpetas = [
            [
                'path'=>'device/fotos/',
                'hijo_id'=>1,
            ],
            [
                'path'=>'device/fotos/the-big-bang-theory/',
                'hijo_id'=>1,
            ],
            [
                'path'=>'device/fotos/dibujo/',
                'hijo_id'=>2,
            ],
            [
                'path'=>'device/fotos/los_simpson/',
                'hijo_id'=>2,
            ],
        ];
        foreach ($carpetas as $carpeta) {
            Carpeta::create($carpeta);
        }
    }
}
