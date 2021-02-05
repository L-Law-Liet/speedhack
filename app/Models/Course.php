<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'body', 'duration', 'course_category_id'];
    public function course_category(){
        return $this->belongsTo(CourseCategory::class);
    }
    public function course_facts(){
        $this->hasMany(CourseFacts::class);
    }
    public function course_infos(){
        $this->hasMany(CourseInfo::class);
    }
    public function facts(){
        $this->hasMany(Fact::class);
    }
    public function programs(){
        $this->hasMany(Program::class);
    }
    public function certificate(){
        $this->hasOne(Certificate::class);
    }
}
