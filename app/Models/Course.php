<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    protected $table = "course";
    public $fillable = [
        'name_course',
        'name_discipline',
        'load_hours',
    ];
}
