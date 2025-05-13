<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SpecialtyTeacher;

class SpecialtyTeacherSeeder extends Seeder
{
    public function run()
    {
        SpecialtyTeacher::create([
            'teacher_id' => 1,
            'specialty_id' => 1,
        ]);

        SpecialtyTeacher::create([
            'teacher_id' => 2,
            'specialty_id' => 2,
        ]);
    }
}
