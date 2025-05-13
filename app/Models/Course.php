<?php

namespace App\Models;

use App\Enums\PeriodEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'icon',
        'period',
        'total_workload',
        'tcc_load',
        'modality_id',
        'technological_axi_id',
        'type_enablenment_id',
    ];

    protected $casts = [
        'period' => PeriodEnum::class,
    ];

    public function modality()
    {
        return $this->belongsTo(Modality::class);
    }

    public function technologicalAxi()
    {
        return $this->belongsTo(TechnologicalAxi::class);
    }

    public function typeEnablenment()
    {
        return $this->belongsTo(TypeEnablenment::class);
    }
}
