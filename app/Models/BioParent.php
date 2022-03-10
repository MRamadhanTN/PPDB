<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BioParent extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'stage_id',
        'academy_year_id',
        'name_father',
        'name_mother',
        'wa_father',
        'wa_mother',
        'work_father',
        'work_mother',
        'father_income',
        'mother_income',
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
