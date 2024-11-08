<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        
        $this->call(HijoSeeder::class);
        $this->call(TokenSeeder::class);
       $this->call(LocalizacionSeeder::class);
       $this->call(CategoriaSeeder::class);
        $this->call(ContenidoSeeder::class);
        $this->call(ArchivoSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(LlamadaSeeder::class);
        //$this->call(PlanTutorSeeder::class);
        $this->call(PlanSeeder::class);
     //   $this->call(RegistrarTokenSeeder::class);
    }
}
