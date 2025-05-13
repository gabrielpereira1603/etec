<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseInfo extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'course_id',
        'headline',
        'intro',
        'objectives',
        'profile',
        'certifications',
        'job_areas',
        'differentials',
        'enrollment_info',
        'cover_image',
        'promo_video_url',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
