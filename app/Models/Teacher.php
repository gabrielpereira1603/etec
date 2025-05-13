<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'title',
        'photo',
        'bio',
    ];

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class);
    }
}
