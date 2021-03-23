<?php

namespace App\Http\Controllers;
use App\Siswa;
use Session;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function check (Request $request) {
        $data = Siswa::where('nama',$request->nama)->where('id',$request->id)->first();
        if($data) {
            $request->session()->put('logged_in', true);
            $request->session()->put('user', $data);
            return redirect('/siswa/dashboard');
        }
           else {
            return redirect('/login');
        }
    }

    public function dashboard () {
        $siswa = Session::get('user');
        return view('siswa.dashboard', compact('siswa'));
        // return $siswa;
    }

}
