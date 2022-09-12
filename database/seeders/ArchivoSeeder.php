<?php

namespace Database\Seeders;

use App\Models\Archivo\Archivo;
use Illuminate\Database\Seeder;

class ArchivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $archivos = [
            [
                'fecha' => '2015-11-01 10:10:00',
                'nombre_archivo' => 'picture.png',
                'carpeta_id' => 1,
            ],
            [
                'fecha' => '2015-11-01 12:10:00',
                'nombre_archivo' => 'peli.jpg',
                'carpeta_id' => 2,
            ],
            [
                'fecha' => '2015-11-01 14:10:00',
                'nombre_archivo' => 'foto.jpg',
                'carpeta_id' => 1,
            ],
            [
                'fecha' => '2015-11-01 16:10:00',
                'nombre_archivo' => 'image.jpg',
                'carpeta_id' => 2,
            ],
        ];
        foreach ($archivos as $archivo) {
            Archivo::create($archivo);
        }
    }
}
