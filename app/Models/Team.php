<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = false;
    public $fillable = [
        'name',
        'course',
        'discipline',
        'teacher',
        'student',
        'date_start',
    ];

    public function relRegistrations()
    {
        return $this->hasMany('App\Models\ModelRegistration', 'id_team');
    }
}
