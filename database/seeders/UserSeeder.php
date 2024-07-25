<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'perfil' => 1,
            'usuario' => 'secretaria',
            'password' => '12345678',
        ]);
        Usuario::create([
            'perfil' => 2,
            'usuario' => 'assistente',
            'password' => '12345678',
        ]);
        Usuario::create([
            'perfil' => 3,
            'usuario' => 'cadastro',
            'password' => '12345678',
        ]);
    }
}
