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
                'path' => 'image/picture.png',
                'hijo_id' => 1,
            ],
            [
                'fecha' => '2015-11-01 12:10:00',
                'path' => 'fotos/peli.jpg',
                'hijo_id' => 2,
            ],
            [
                'fecha' => '2015-11-01 14:10:00',
                'path' => 'image/foto.jpg',
                'hijo_id' => 1,
            ],
            [
                'fecha' => '2015-11-01 16:10:00',
                'path' => 'fotos/image.jpg',
                'hijo_id' => 2,
            ],
        ];
        foreach ($archivos as $archivo) {
            Archivo::create($archivo);
        }
    }
}
