<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RegisterController extends Controller
{
    public function show()
    {   
       return Inertia::render('Speedhack/Static/Register');
    }

    public function login_show()
    {   
       return Inertia::render('Speedhack/Static/Login');
    }

    
}
