<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //SIN LLAVES FORÁNEAS
            TituloSeeder::class,
            CondicionSeeder::class,
            ConsolaSeeder::class,
            UsuarioSeeder::class,
            RolSeeder::class,
            PermisoSeeder::class,
            //USA LLAVES FORÁNEAS
            JuegoSeeder::class,
            OfertaSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
