<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTeacher extends Model
{
    use SoftDeletes;

    protected $table = 'course_teachers';

    protected $fillable = [
        'course_id',
        'teacher_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
