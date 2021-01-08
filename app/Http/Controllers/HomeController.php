<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function welcome()
    {   
       return Inertia::render('Speedhack/Static/Welcome');
    }

    public function all_courses(){
    	return Inertia::render('Speedhack/Static/AllCourses');
    }

    public function course(){
    	return Inertia::render('Speedhack/Static/Course');
    }

    public function teacher()
    {   
       return Inertia::render('Speedhack/Static/Teacher');
    }

    public function news()
    {   
       return Inertia::render('Speedhack/Static/News');
    }

    public function news_item()
    {   
       return Inertia::render('Speedhack/Static/NewsItem');
    }

     public function comments()
    {   
       return Inertia::render('Speedhack/Static/Comments');
    }
    public function error()
    {   
       return Inertia::render('Speedhack/Static/Error');
    }
}
