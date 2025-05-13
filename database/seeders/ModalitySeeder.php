<?php

namespace Database\Seeders;

use App\Models\Modality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModalitySeeder extends Seeder
{
    public function run(): void
    {
        $modalities = [
            'Integrado ao Ensino Médio',
            'Subsequente ao Ensino Médio',
            'Concomitante ao Ensino Médio',
        ];

        foreach ($modalities as $name) {
            Modality::create(['name' => $name]);
        }
    }
}
