<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function userLogin(){
        return view('login');
    }
}
