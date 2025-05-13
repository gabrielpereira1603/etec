<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialty;

class SpecialtySeeder extends Seeder
{
    public function run(): void
    {
        $specialties = [
            'Administração',
            'Gestão de Pessoas',
            'Contabilidade',
            'Logística',
            'Programação Web',
            'Desenvolvimento de Sistemas',
            'Agronegócio',
            'Direito Civil',
            'Marketing',
            'Empreendedorismo',
            'Segurança do Trabalho',
            'Matemática Aplicada',
        ];

        foreach ($specialties as $name) {
            Specialty::create(['name' => $name]);
        }
    }
}
