<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consola')->insert([
            [
                "idConsola" => 1,
                "nombre" => "Nintendo Switch",
            ],
            [
                "idConsola" => 2,
                "nombre" => "PlayStation 5",
            ],
            [
                "idConsola" => 3,
                "nombre" => "Wii U",
            ],
            [
                "idConsola" => 4,
                "nombre" => "PlayStation 4",
            ],
            [
                "idConsola" => 5,
                "nombre" => "PlayStation 3",
            ],
            [
                "idConsola" => 6,
                "nombre" => "PlayStation 2",
            ],
            [
                "idConsola" => 7,
                "nombre" => "Wii",
            ],
            [
                "idConsola" => 8,
                "nombre" => "Nintendo 3DS",
            ],
            [
                "idConsola" => 9,
                "nombre" => "PC",
            ],
            [
                "idConsola" => 10,
                "nombre" => "Xbox Series S",
            ],
            [
                "idConsola" => 11,
                "nombre" => "Xbox Series X",
            ],
            [
                "idConsola" => 12,
                "nombre" => "Xbox One",
            ],
            [
                "idConsola" => 13,
                "nombre" => "Xbox 360",
            ],
        ]);
    }
}
