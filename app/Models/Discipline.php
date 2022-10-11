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
        'name_discipline',
        'load_hours',

    ];
    public function course()
    {
        return $this->hasOne(Course::class, 'discipline_id');
    }
    public function teacher()
    {
        return $this->hasOne(teacher::class, 'discipline_id');
    }
}
