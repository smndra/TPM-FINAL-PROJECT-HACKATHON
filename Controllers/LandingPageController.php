<?php

namespace App\Http\Controllers;

class LandingPageController extends Controller
{
    public function showLogin(){
        return view('login');
    }
}