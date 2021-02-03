<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class TeacherController extends Controller
{
    public function courses()
    {   
      return Inertia::render('Speedhack/Teacher/Courses');
    }

     public function homework()
    {   
      return Inertia::render('Speedhack/Teacher/Homework');
    }

     public function profile()
    {   
      return Inertia::render('Speedhack/Teacher/Profile');
    }

     public function calendar()
    {   
      return Inertia::render('Speedhack/Teacher/Calendar');
    }
}
