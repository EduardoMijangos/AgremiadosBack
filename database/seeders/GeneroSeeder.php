<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = [
            ['genero' => 'Masculino'],
            ['genero' => 'Femenino'],
            ['genero' => 'HelicopteroApacheF50'],
            ['genero' => 'Cerrucho'],
            ['genero' => 'OTRO'],
        ];
        Genero::insert($generos);
    }
}
