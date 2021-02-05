<?php

namespace App\Services;

use DB, Mail;

class SendEmail {

    public function sendLoginPassword($email, $login, $password)
    {   
        $text = 'Ваш логин '.$login.', '.'Ваш пароль: '.$password;

        Mail::raw($text, function ($message) use ($email){
            $message->to($email);
            $message->subject('Speedhack, логин и пароль');
        });
        
        return 'ok';
    }

    public function generatePassword($length)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr(str_shuffle($chars), 0,  $length);
        return  $password;
    }
}