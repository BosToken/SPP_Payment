<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function login(){
        return view('login');
    }

    public function logout() {
        Session::flush();
        return redirect('/login');
    }
}
