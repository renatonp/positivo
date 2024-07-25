<?php

namespace Database\Seeders;

use App\Models\Perfil;
use Illuminate\Database\Seeder;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Perfil::create([
            'perfil' => 'Secretária',
        ]);
        Perfil::create([
            'perfil' => 'Assistente',
        ]);
        Perfil::create([
            'perfil' => 'Cadastro',
        ]);
    }
}
