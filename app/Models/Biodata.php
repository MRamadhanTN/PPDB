<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biodata extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'stage_id',
        'academy_year_id',
        'provinces_id',
        'regencies_id',
        'districts_id',
        'no_peserta',
        'no_hp',
        'gender',
        'nspn',
        'name_school',
        'village',
        'nik',
        'place_birth',
        'age',
        'address',
        'religion',
        'rt',
        'rw',
        'pos_code',
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
