<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;
use App\Models\Specialty;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $teacher1 = Teacher::create([
            'name' => 'Joana Almeida',
            'title' => 'Doutora em Administração',
            'photo' => 'teachers/joana.jpg',
            'bio' => 'Professora com experiência em gestão empresarial e docência no ensino técnico.',
        ]);

        $teacher2 = Teacher::create([
            'name' => 'Carlos Silva',
            'title' => 'Mestre em Sistemas de Informação',
            'photo' => 'teachers/carlos.jpg',
            'bio' => 'Atua no desenvolvimento de sistemas e ensino de programação web.',
        ]);

        $teacher3 = Teacher::create([
            'name' => 'Fernanda Ramos',
            'title' => 'Engenheira Agrônoma',
            'photo' => 'teachers/fernanda.jpg',
            'bio' => 'Especialista em recursos naturais e sustentabilidade no campo.',
        ]);

        $teacher1->specialties()->attach([1, 2]);
        $teacher2->specialties()->attach([5, 6]);
        $teacher3->specialties()->attach([7]);
    }
}
