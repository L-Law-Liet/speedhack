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
}
