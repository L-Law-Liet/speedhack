<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInfo extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'image', 'course_id'];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
