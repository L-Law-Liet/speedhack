<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    public function one()
    {   
       return Inertia::render('Speedhack/Test/One');
    }

    public function two()
    {   
       return Inertia::render('Speedhack/Test/Two');
    }

    public function three()
    {   
       return Inertia::render('Speedhack/Test/Three');
    }

    public function four()
    {   
       return Inertia::render('Speedhack/Test/Four');
    }

    public function five()
    {   
       return Inertia::render('Speedhack/Test/Five');
    }

    public function result()
    {   
       return Inertia::render('Speedhack/Test/Result');
    }

     
}
