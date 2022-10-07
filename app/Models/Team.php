<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "team";
    public $fillable = [
        'name_team',
        'name_course',
        'name_teacher',
        'name_student',
        'date_start',
    ];
}
