<?php

namespace App\Models;

use App\Http\Resources\student;
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
    public function course()
    {
        return $this->belongsToMany(Course::class);
    }
    public function teacher()
    {
        return $this->belongsToMany(Teacher::class);
    }
    public function student()
    {
        return $this->belongsToMany(student::class);
    }
}
