<?php

namespace Database\Seeders;

use App\Models\Localizacion\Localizacion;
use Illuminate\Database\Seeder;

class LocalizacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $localizaciones = [
            [
                'hijo_id' => 6,
                'latitud' =>-17.846318897515975,
                'longitud'=>-63.08150387992806,
            ],
            [
                'hijo_id' => 5,
                'latitud' =>-17.846318897515975,
                'longitud'=>-63.08150387992806,
            ],
            [
                'hijo_id' => 4,
                'latitud' =>-17.846318897515975,
                'longitud'=>-63.08150387992806,
            ],
            [
                'hijo_id' => 3,
                'latitud' =>-17.846318897515975,
                'longitud'=>-63.08150387992806,]
        ];
        foreach ($localizaciones as $localizacion) {
            Localizacion::create($localizacion);
        }
    }
}
