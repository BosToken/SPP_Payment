<?php

namespace App\Http\Controllers;
use App\Siswa;
use App\Pembayaran;
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
            return redirect(' ');
        }
    }

    public function dashboard () {
        $siswa = Session::get('user');
        // $history = Pembayaran::find($user->id)->pembayarans()->get();
        return view('siswa.dashboard', compact('siswa'));
        // return $siswa;
    }

    public function history(){  
        $siswa = Session::get('user');
        $history = Siswa::find($siswa->id)->pembayarans()->get();
        return view('siswa.history', compact('siswa', 'history'));
    }
   
    public function profile () {
        $siswa = Session::get('user');
        return view('siswa.profile', compact('siswa'));
        // return $siswa;
    }

}
