<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GaleryAchievement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'achievement_siswa_id',
        'image',
    ];

    public function achievement()
    {
        return $this->belongsTo(AchievementSiswa::class, 'achievement_siswa_id', 'id');
    }
}
