<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            [
                "idRol" => 201,
                "nombre" => "administrador",
            ],
            [
                "idRol" => 202,
                "nombre" => "usuario",
            ]
        ]);
    }
}
