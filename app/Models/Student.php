<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "student";
    protected $fillable=[
        'name_student',
        'name_course',
        'name_discipline',
        'name_team',
        'CPF',
        'phone',
        'email',
        'birth_date'
    ];
    public function course()
    {
        return $this->belongsToMany(course::class);
    }
    public function team()
    {
        return $this->hasOne(team::class, 'student_id');
    }

}

