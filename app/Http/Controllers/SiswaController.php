<?php

namespace App\Http\Controllers;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function check (Request $request) {
        $data = Siswa::where('nama',$request->nama)->where('id',$request->id)->first();
        if($data) {
            $request->session()->put('logged_in', true);
            return redirect('/siswa/dashboard');
        }
           else {
            return redirect('/login');
        }
        // $email = $req->email;
        // $pwd   = $req->password;
        // if (Auth::attempt(['email' => $email, 'password' => $pwd])) {
        //     return "Hai ". Auth::user()->name;
        // }else{
        //     return "Maaf email atau password yang anda masukan tidak sesuai.";
    }
}
