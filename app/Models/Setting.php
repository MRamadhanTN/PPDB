<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'announcement',
        'name_school',
        'email_school',
        'no_school',
        'address_school',
        'map',
        'facebook',
        'instagram',
        'website',
    ];
}
