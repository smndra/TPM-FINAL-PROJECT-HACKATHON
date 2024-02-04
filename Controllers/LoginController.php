<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function processLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Input Email',
            'password.required'=>'Input password'
        ]);

        return redirect('/dashboard');
    }
}
