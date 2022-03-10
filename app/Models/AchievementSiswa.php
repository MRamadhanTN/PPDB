<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AchievementSiswa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'stage_id',
        'academy_year_id',
        'content',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class, 'stage_id', 'id');
    }

    public function academy_year()
    {
        return $this->belongsTo(AcademyYear::class, 'academy_year_id', 'id');
    }
}
