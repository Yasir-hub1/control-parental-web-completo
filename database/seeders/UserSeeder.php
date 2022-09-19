<?php

namespace Database\Seeders;

use App\Models\Administrativo\Administrativo;
use App\Models\Hijo\Hijo;
use App\Models\Tutor\Tutor;
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
                'name' => "Pablo",
                'email' => "pablo@gmail.com",
                'apellido' => "Marmol",
                'celular' => "66637322",
                'fecha_nacimiento' => "1997/01/04",
                'sexo' => "M",
                'tipo' => "T",
                'password' => bcrypt("12345678")
            ],
            [
                'name' => "Sara",
                'email' => "sara@gmail.com",
                'apellido' => "campos",
                'celular' => "73283232",
                'fecha_nacimiento' => "2003/05/27",
                'sexo' => "F",
                'tipo' => "H",
                'password' => bcrypt("12345678")
            ],
            [
                'name' => "Jose",
                'email' => "jose@gmail.com",
                'apellido' => "Soto",
                'celular' => "67233232",
                'fecha_nacimiento' => "2010/03/17",
                'sexo' => "M",
                'tipo' => "H",
                'password' => bcrypt("12345678")
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
        $users = User::all();
        $admins = $users->where('tipo', 'A');
        $tutors = $users->where('tipo', 'T');
        $hijos = $users->where('tipo', 'H');
        $c = 0;
        foreach ($admins as $admin) {
            Administrativo::create(['user_id' => $admin->id]);
        }

        Tutor::create([
            'user_id' => $tutors->first()->id,
        ]);

        Hijo::create([
            'alias' => 'sarita',
            'edad' => 18,
            'user_id' => $hijos->first()->id,
            'tutor_id' => 1
        ]);
        Hijo::create([
            'alias' => 'joss',
            'edad' => 18,
            'user_id' => $hijos->last()->id,
            'tutor_id' => 1
        ]);
    }
}
