<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
        'name',
        'CPF',
        'phone',
        'email',
        'birth date'
    ];

    public function relRegistrations()
    {
        return $this->hasMany('App\Models\ModelRegistration', 'id_student');
    }
}

