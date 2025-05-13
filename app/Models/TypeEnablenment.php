<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeEnablenment extends Model
{
    use SoftDeletes;

    protected $table = 'type_enablenment';

    protected $fillable = [
        'name',
    ];
}
