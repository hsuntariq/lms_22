<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Login(Request $req){
        $formFields = $req->validate([
            "email" => 'required',
            "password" => 'password'
        ]);


        if(Auth::attempt($formFields)){
            return redirect('/teacher/dashboard');
        }else{
            return back()->with('message','Invalid Credentials');
        }


    }
}