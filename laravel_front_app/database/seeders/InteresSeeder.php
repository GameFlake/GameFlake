<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InteresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interes')->insert([
            [
                "idInteres" => 1,
                "idUsuario" => "2",
                "idTitulo" => "2",
            ],
            [
                "idInteres" => 2,
                "idUsuario" => "1",
                "idTitulo" => "3",
            ],
            [
                "idInteres" => 3,
                "idUsuario" => "3",
                "idTitulo" => "5",
            ]
        ]);
    }
}
