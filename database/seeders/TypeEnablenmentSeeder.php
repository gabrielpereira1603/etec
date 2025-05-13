<?php

namespace Database\Seeders;

use App\Models\TypeEnablenment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeEnablenmentSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            'Técnico em Administração',
            'Técnico em Logística',
            'Técnico em Desenvolvimento de Sistemas',
            'Técnico em Recursos Humanos',
            'Técnico em Serviços Jurídicos',
            'Técnico em Agropecuária',
            'Técnico em Informática para Internet',
        ];

        foreach ($types as $name) {
            TypeEnablenment::create(['name' => $name]);
        }
    }
}
