<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $timestamps = false;
    public $fillable = [
        'name',
        'id_discipline',
        'load_hours',
    ];
}
