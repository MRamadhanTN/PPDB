<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademyYear extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'stage_id',
        'year',
        'is_active',
    ];

    public function student()
    {
        return $this->hasMany(Student::class, 'academy_year_id', 'id');
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class, 'academy_year_id');
    }

    public function bio_parent()
    {
        return $this->hasOne(BioParent::class, 'academy_year_id');
    }

    public function important()
    {
        return $this->hasOne(Important::class, 'academy_year_id');
    }

    public function achievement_siswa()
    {
        return $this->hasOne(AchievementSiswa::class, 'academy_year_id');
    }
}
