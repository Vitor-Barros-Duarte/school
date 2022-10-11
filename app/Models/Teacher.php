<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = "teacher";
    protected $fillable=[
        'name_teacher',
        'name_discipline',
        'cpf',
        'phone',
        'email',

    ];
    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }
    public function team()
    {
        return $this->hasOne(team::class, 'teacher_id');
    }
}
