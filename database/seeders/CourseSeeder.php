<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'name' => 'Administração',
                'code' => '603',
                'icon' => 'icons/admin.svg',
                'period' => 'noturno',
                'total_workload' => 3000,
                'tcc_load' => 120,
                'modality_id' => 1,
                'technological_axi_id' => 1,
                'type_enablenment_id' => 1,
            ],
            [
                'name' => 'Desenvolvimento de Sistemas',
                'code' => '560',
                'icon' => 'icons/dev.svg',
                'period' => 'integral',
                'total_workload' => 1200,
                'tcc_load' => 120,
                'modality_id' => 2,
                'technological_axi_id' => 2,
                'type_enablenment_id' => 2,
            ],
            [
                'name' => 'Logística',
                'code' => '471',
                'icon' => 'icons/logistica.svg',
                'period' => 'vespertino',
                'total_workload' => 1200,
                'tcc_load' => 120,
                'modality_id' => 3,
                'technological_axi_id' => 1,
                'type_enablenment_id' => 3,
            ],            [
                'name' => 'MTEC PI – ENSINO MÉDIO COM HABILITAÇÃO PROFISSIONAL DE TÉCNICO EM AGROPECUÁRIA',
                'code' => '',
                'icon' => 'icons/MTEC_PI.svg',
                'period' => 'integral',
                'total_workload' => 26298,
                'tcc_load' => 8766,
                'modality_id' => 1,
                'technological_axi_id' => 3,
                'type_enablenment_id' => 6,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
