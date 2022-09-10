<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => "Christian",
                'email' => "christian@gmail.com",
                'apellido' => "Mamani",
                'celular' => "77348732",
                'fecha_nacimiento' => "2000/01/04",
                'sexo' => "M",
                'tipo' => "A",
                'password' => bcrypt("12345678")
            ],
            [
                'name' => "Rister",
                'email' => "rister@gmail.com",
                'apellido' => "Cuellar",
                'celular' => "78237322",
                'fecha_nacimiento' => "2000/08/01",
                'sexo' => "M",
                'tipo' => "A",
                'password' => bcrypt("12345678")
            ],
            [
                'name' => "Junior",
                'email' => "junior@gmail.com",
                'apellido' => "Llanos",
                'celular' => "67236323",
                'fecha_nacimiento' => "2000/12/14",
                'sexo' => "M",
                'tipo' => "A",
                'password' => bcrypt("12345678")
            ],
            [
                'name' => "Parental",
                'email' => "parental@gmail.com",
                'apellido' => "Control",
                'celular' => "77348732",
                'fecha_nacimiento' => "1992/01/04",
                'sexo' => "M",
                'tipo' => "T",
                'password' => bcrypt("12345678")
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
