<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InitialNews extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'redirect_link',
        'banner',
    ];
}
