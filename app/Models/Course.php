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
        'discipline_id',
        'load_hours',
    ];

    public function disciplines()
    {
        return $this->belongsTo(disciplines::class);
    }
    public function student()
    {
        return $this->hasMany(student::class, 'course_id', 'name_course');
    }
    public function team()
    {
        return $this->hasMany(team::class, 'course_id', 'name_course');
    }
}
