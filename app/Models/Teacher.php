<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable=[
        'nome',
        'cpf',
        'phone',
        'email',
        'discipline'

    ];

    public function relRegistrations()
    {
        return $this->hasMany('App\Models\ModelRegistration', 'id_teacher');
    }
}
