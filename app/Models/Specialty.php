<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialty extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }
}
