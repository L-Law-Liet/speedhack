<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {   
    	Auth::logout();
    	// dd(Auth::user());
       return Inertia::render('Speedhack/Static/Login');
    }

    public function authenticate(LoginRequest $request)
    {   
    	
    	$data = $request->except('_token');
    	$credentials = $request->only('email', 'password');
    	$user = User::where('email', $credentials['email'])->first();
        if($user){
            $check = Hash::check($credentials['password'] , $user->password ) == true;
        }
     	
        if ( $user && $check){
        	$auth = Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']]);
        	return $this->successMessage();
        }else{
            return response([
                'errors' => ['password' => ['Логин и пароль не совпадает']],
            ], 422);
        }
    }

    public function forgot_password()
    {   
       return Inertia::render('Speedhack/Static/ForgotPassword');
    }
}
