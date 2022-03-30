<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authlogin(){
        return view('admin/login/auth-login-basic');
    }
    public function registerlogin(){
        return view('admin/login/auth-register-basic');
    }
    public function authforgotpassword(){
        return view('admin/login/authforgotpassword');
    }
}
