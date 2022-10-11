<?php

namespace App\Models;

use App\Http\Resources\student;
use App\Http\Resources\team;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "course";
    public $fillable = [
        'name_course',
        'name_discipline',
        'load_hours',
    ];

    public function discipline()
    {
        return $this->belongsTo(discipline::class);
    }
    public function student()
    {
        return $this->hasOne(student::class, 'course_id');
    }
    public function team()
    {
        return $this->hasOne(team::class, 'course_id');
    }
}
