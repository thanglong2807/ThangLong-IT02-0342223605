<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client/main');
    }
    public function login(){
        return view('client/login');
    }
    public function blogpost(){
        return view('client/blog-post');
    }
    public function register(){
        return view('client/register-blog');
    }
}
