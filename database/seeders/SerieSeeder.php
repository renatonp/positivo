<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Seeder;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Serie::create([
            'serie' => 'G1',
        ]);
        Serie::create([
            'serie' => 'G2',
        ]);
        Serie::create([
            'serie' => 'G3',
        ]);
        Serie::create([
            'serie' => '1º ano',
        ]);
        Serie::create([
            'serie' => '2º ano',
        ]);
        Serie::create([
            'serie' => '3º ano',
        ]);
        Serie::create([
            'serie' => '4º ano',
        ]);
        Serie::create([
            'serie' => '5º ano',
        ]);
        Serie::create([
            'serie' => '6º ano',
        ]);
        Serie::create([
            'serie' => '7º ano',
        ]);
        Serie::create([
            'serie' => '8º ano',
        ]);
        Serie::create([
            'serie' => '9º ano',
        ]);
        Serie::create([
            'serie' => '1º ano do Ensino Médio',
        ]);
        Serie::create([
            'serie' => '2º ano do Ensino Médio',
        ]);
        Serie::create([
            'serie' => '3º ano do Ensino Médio',
        ]);
    }
}
