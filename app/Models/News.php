<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'date', 'body'];

//    protected static function boot()
//    {
//        parent::boot(); // TODO: Change the autogenerated stub
//        News::created(function ($course){
//            if(starts_with($course->image, 'public')){
//                $course->image = substr($course->image, 6);
//                $course->save();
//            }
//        });
//    }
}
