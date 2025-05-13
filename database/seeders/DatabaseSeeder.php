<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TechnologicalAxiSeeder::class,
            TypeEnablenmentSeeder::class,
            ModalitySeeder::class,
            CourseSeeder::class,
            CourseInfoSeeder::class,
            InitialNewsSeeder::class,
            EventSeeder::class,
            SpecialtySeeder::class,
            TeacherSeeder::class,
            CourseTeacherSeeder::class,
            SpecialtyTeacherSeeder::class
        ]);
    }
}
