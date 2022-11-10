<?php

namespace App\Models;

use App\Http\Resources\course;
use App\Http\Resources\teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "discipline";
    public $fillable = [
        'discipline_id',
        'name_discipline',
        'load_hours',

    ];
    public function courses()
    {
        return $this->hasMany('App\Models\course');
    }
    public function teacher()
    {
        return $this->hasMany(teacher::class, 'discipline_id', 'name_discipline');
    }
}
