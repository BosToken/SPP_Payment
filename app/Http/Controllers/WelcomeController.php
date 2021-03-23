<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function logout() {
        Session::flush();
        return redirect(' ');
    }
}
