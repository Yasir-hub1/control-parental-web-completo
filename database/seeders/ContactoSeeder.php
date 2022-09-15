<?php

namespace Database\Seeders;

use App\Models\Contacto\Contacto;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactos = [
            [
                'nombre' => 'José luis',
                'numero' => '76623762',
                'hijo_id' => 1,
            ],
            [
                'nombre' => 'Mariana Aguilar',
                'numero' => '66327362',
                'hijo_id' => 1,
            ],
            [
                'nombre' => 'Juanita Parraga',
                'numero' => '64563456',
                'hijo_id' => 2,
            ],
            [
                'nombre' => 'Freddy Cruz',
                'numero' => '77782372',
                'hijo_id' => 2,
            ],
            [
                'nombre' => 'Carlos Gutierrez',
                'numero' => '66647434',
                'hijo_id' => 2,
            ],
            [
                'nombre' => 'Zeneida Zaragosa',
                'numero' => '77328232',
                'hijo_id' => 1,
            ],
        ];
        foreach ($contactos as $contacto) {
            Contacto::create($contacto);
        }
    }
}
