<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentsController extends Controller
{
    public function index(){
        return Inertia::render('Speedhack/Static/Student');
    }
}
