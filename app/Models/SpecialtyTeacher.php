<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecialtyTeacher extends Model
{
    use SoftDeletes;

    protected $table = 'specialty_teacher';

    protected $fillable = [
        'teacher_id',
        'specialty_id',
    ];


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
