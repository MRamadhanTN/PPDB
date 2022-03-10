<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function academy_year()
    {
        return $this->hasMany(AcademyYear::class, 'stage_id', 'id');
    }

    public function biodata()
    {
        return $this->hasOne(Biodata::class, 'stage_id');
    }

    public function bio_parent()
    {
        return $this->hasOne(BioParent::class, 'stage_id');
    }

    public function important()
    {
        return $this->hasOne(Important::class, 'stage_id');
    }

    public function achievement_siswa()
    {
        return $this->hasOne(AchievementSiswa::class, 'stage_id');
    }
}
