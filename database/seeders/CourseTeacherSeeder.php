<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseTeacher;

class CourseTeacherSeeder extends Seeder
{
    public function run()
    {
        CourseTeacher::create([
            'course_id' => 1,
            'teacher_id' => 1,
        ]);

        CourseTeacher::create([
            'course_id' => 2,
            'teacher_id' => 2,
        ]);

    }
}
