<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function showLoginForm(){
            return view('auth.login');
    }

    public function showSignupform(){
        return view('auth.signup');
    }
}
