<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Fact;
use App\Models\Feedback;
use App\Models\News;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Auth;

class HomeController extends Controller
{
    public function welcome()
    {
        $data['courses'] = Course::take(6)->get();
        $data['news'] = News::all();
        $data['comments'] = Feedback::take(4)->get();
        $data['avg'] = round(Feedback::avg('rate'), 1);
        return Inertia::render('Speedhack/Static/Welcome', $data);
    }

    public function all_courses(){
        $categories = CourseCategory::with('courses')->get();
    	return Inertia::render('Speedhack/Static/AllCourses', compact('categories'));
    }

    public function course($id){
        $course = Course::findOrFail($id);
        $data['course'] = $course;
        $data['facts'] = $data['course']->facts;
        $data['facts_course'] = $data['course']->course_facts;
        $data['info'] = $data['course']->course_infos;
        $data['programs'] = $data['course']->programs()->with('lessons')->get();
        $data['certificate'] = $data['course']->certificate;
        $data['comments'] = Feedback::take(4)->get();
        $data['avg'] = round(Feedback::avg('rate'), 1);
    	return Inertia::render('Speedhack/Static/Course', $data);
    }

    public function teacher()
    {
       return Inertia::render('Speedhack/Static/Teacher');
    }

    public function news()
    {
        $news = News::all();
        return Inertia::render('Speedhack/Static/News', compact('news'));
    }

    public function news_item(News $news)
    {
       return Inertia::render('Speedhack/Static/NewsItem', compact('news'));
    }

     public function comments()
    {
        $data['comments'] = Feedback::all();
        $data['avg'] = round(Feedback::avg('rate'), 1);
       return Inertia::render('Speedhack/Static/Comments', $data);
    }
    public function error()
    {
       return Inertia::render('Speedhack/Static/Error');
    }
}
