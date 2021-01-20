<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountController extends Controller
{
    public function courses()
    {   
       return Inertia::render('Speedhack/Student/Courses');
    }

    public function course()
    {   
       return Inertia::render('Speedhack/Student/Course');
    }

     public function lesson()
    {   
       return Inertia::render('Speedhack/Student/Lesson');
    }

    public function calendar()
    {   
       return Inertia::render('Speedhack/Student/Calendar');
    }

    public function events()
    {   
      for ($number = 0; $number < 30; ++$number) {
          $calendars[]['full'] = date("Y-m-d", strtotime("+$number day"));
      }
       
        return Inertia::render('Speedhack/Student/Events', compact('calendars'));
    }
}
