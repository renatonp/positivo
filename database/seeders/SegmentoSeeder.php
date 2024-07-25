<?php

namespace Database\Seeders;

use App\Models\Segmento;
use Illuminate\Database\Seeder;

class SegmentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Segmento::create([
            'segmento' => 'Infantil',
        ]);
        Segmento::create([
            'segmento' => 'Anos Iniciais',
        ]);
        Segmento::create([
            'segmento' => 'Anos Finais',
        ]);
        Segmento::create([
            'segmento' => 'Ensino Médio',
        ]);
    }
}
