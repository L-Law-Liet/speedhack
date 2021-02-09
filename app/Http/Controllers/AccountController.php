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

     public function eventLesson(){
      return Inertia::render('Speedhack/Student/EventLesson');
    }

    public function homework()
    {   
       return Inertia::render('Speedhack/Student/Homework');
    }

    public function materials()
    {   
       return Inertia::render('Speedhack/Student/Materials');
    }

    public function grammar()
    {   
      return Inertia::render('Speedhack/Student/Grammar');
    }

    public function vocabulary(){
      return Inertia::render('Speedhack/Student/Vocabulary');
    }

    public function profile(){
      return Inertia::render('Speedhack/Student/Profile');
    }

    public function news(){
      return Inertia::render('Speedhack/Student/News');
    }

    public function itemNews(){
      return Inertia::render('Speedhack/Student/ItemNews');
    }

    public function eventItems(){
      return Inertia::render('Speedhack/Student/ItemEvent');
    }

    public function buyCourses(){
      return Inertia::render('Speedhack/Student/BuyCourses');
    }

    public function avatar_save(Request $request)
    {
        $path = $request->file('file')->store('public/Avatar'); 
        return response()->json([
            'nameFile' => '/storage'.substr($path, 6),
        ]);
    }

    public function trial()
    {   
       return Inertia::render('Speedhack/Student/TrialLesson');
    }
}
