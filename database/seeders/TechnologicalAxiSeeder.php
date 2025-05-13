<?php

namespace Database\Seeders;

use App\Models\TechnologicalAxi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologicalAxiSeeder extends Seeder
{
    public function run(): void
    {
        $axis = [
            'Gestão e Negócios',
            'Informação e Comunicação',
            'Recursos Naturais',
            'Ambiente e Saúde',
            'Controle e Processos Industriais',
            'Produção Cultural e Design',
            'Infraestrutura',
            'Desenvolvimento Educacional e Social',
        ];

        foreach ($axis as $name) {
            TechnologicalAxi::create(['name' => $name]);
        }
    }
}
