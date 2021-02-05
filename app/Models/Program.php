<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'count', 'homeworks', 'course_id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
