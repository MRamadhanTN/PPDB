<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Important extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'stage_id',
        'academy_year_id',
        'ijazah',
        'skhun',
        'raport1',
        'raport2',
        'raport3',
        'raport4',
        'raport5',
        'poor_letter',
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
