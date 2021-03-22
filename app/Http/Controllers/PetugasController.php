<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function check (Request $request) {
        $data = Petugas::where('username',$request->username)->where('password',$request->password)->first();
        if($data) {
            $request->session()->put('logged_in', true);
            return redirect('/petugas/dashboard');
        }
           else {
            return redirect('/login');
        }
    }
}