<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'stage_id',
        'academy_year_id',
        'name_siswa',
        'password',
        'nisn',
        'track',
        'birth_date',
        'role',
    ];

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_id', 'id');
    }

    public function academy_year()
    {
        return $this->belongsTo(AcademyYear::class, 'academy_year_id', 'id');
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class, 'student_id');
    }

    public function bio_parent()
    {
        return $this->hasOne(BioParent::class, 'student_id');
    }

    public function important()
    {
        return $this->hasOne(Important::class, 'student_id');
    }

    public function achievement_siswa()
    {
        return $this->hasOne(AchievementSiswa::class, 'student_id');
    }
}
