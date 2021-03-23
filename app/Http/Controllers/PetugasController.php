<?php

namespace App\Http\Controllers;
use Session;
use App\Petugas;
use App\Kelas;
use App\Pembayaran;
use App\Siswa;
use App\Spp;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function check (Request $request) {
        $data = Petugas::where('username',$request->username)->where('password',$request->password)->first();
        if($data) {
            $request->session()->put('logged_in', true);
            $request->session()->put('user', $data);
            return redirect('/petugas/dashboard');
        }
           else {
            return redirect('/login');
        }
    }

    public function dashboard () {
        $petugas = Session::get('user');
        // return view('petugas.dashboard', compact('user'));
        return view('petugas.dashboard', compact('petugas'));
        // return $user;
    }

    public function createsiswa () {
        $siswa = Siswa::all();
        $siswa->load('kelass');
        $petugas = Session::get('user');
        $kelas = Kelas::all();
        return view('petugas.create-siswa', compact('petugas', 'kelas', 'siswa'));
    }

    public function createsiswaspp () {
        $petugas = Session::get('user');
        // $siswa = Siswa::all();
        $siswa = Siswa::where('spp_id', '1')->get();
        $siswa->load('kelass');

        $spp = Spp::all();
        return view('petugas.create-siswaspp', compact('petugas', 'spp', 'siswa'));
    }

    public function createpetugas () {
        $petugas = Session::get('user');
        $all = Petugas::all();

        return view('petugas.create-petugas', compact('petugas', 'all'));
    }

    public function createkelas () {
        $kelas = Kelas::all();
        $petugas = Session::get('user');
        return view('petugas.create-kelas', compact('petugas', 'kelas'));
    }

    public function createspp () {
        $spp = Spp::all();
        $petugas = Session::get('user');
        return view('petugas.create-spp', compact('petugas', 'spp'));
    }

    public function createentri () {

        $petugas = Session::get('user');
        // $siswa = Siswa::with('spps')->get();
        $siswa = Siswa::all();
        // $siswa = Siswa::where('spp_id','1')->get();
        $siswa->load('kelass', 'spps');
        // $siswa = Siswa::join('siswa', 'siswa.spp_id', 'spps.id')->get();

        // return $siswa;
        return view('petugas.create-entri', compact('petugas', 'siswa'));
    }

    public function getsiswaspp (Request $request, $id) {
        $petugas = Session::get('user');

        $siswa = Siswa::where('id', $id)->get();
        $siswa->load('kelass');

        $spp = Spp::all();

        return view('petugas.getsiswa-spp', compact('petugas', 'siswa', 'spp'));
    }

    public function getsiswaentrik (Request $request, $id) {
        $petugas = Session::get('user');
        $siswa = Siswa::where('id', $id)->get();

        return view('petugas.getsiswa-entrik', compact('petugas', 'siswa'));
    }

    public function storesiswa(Request $request)
    {
        $id = $request->id;
        $nis = $request->nis;
        $nama = $request->nama;
        $kelas_id = $request->kelas_id;
        $alamat = $request->alamat;
        $no_telp = $request->no_telp;

        $cekData = Siswa::where('id', $request->id)->exists();
        if ($cekData) {
            return redirect('/create/siswa')->with('gagal', 'NISN Sudah Terdaftar');
        }
        else {
            $siswa = new Siswa();
            $siswa->id = $id;
            $siswa->nis = $nis;
            $siswa->nama = $nama;
            $siswa->kelas_id = $kelas_id;
            $siswa->alamat = $alamat;
            $siswa->no_telp = $no_telp;
            $siswa->spp_id = '1 ';

            $siswa->save();

            return redirect('/create/siswa');
        }
    }

    public function storepetugas(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $nama_petugas = $request->nama_petugas;

        $cekData = Petugas::where('username', $request->username)->exists();
        if ($cekData) {
            return redirect('/create/petugas')->with('gagal', 'Username Sudah Ada Yang Menggunakan, Tolong Gunakan Nama Lain');
        }
        else {

        $data = new Petugas();
        $data->username = $username;
        $data->password = $password;
        $data->nama_petugas = $nama_petugas;
        $data->level = '2';
        $data->save();
        return redirect('/create/petugas');
        }
    }

    public function storekelas(Request $request)
    {
        $nama_kelas = $request->nama_kelas;
        $kompetensi_keahlian = $request->kompetensi_keahlian;

        $data = new Kelas();
        $data->nama_kelas = $nama_kelas;
        $data->kompetensi_keahlian = $kompetensi_keahlian;
        $data->save();
        return redirect('/create/kelas');
    }

    public function storespp(Request $request)
    {
        $nominal = $request->nominal;
        $tahun = $request->tahun;

        $data = new Spp();
        $data->nominal = $nominal;
        $data->tahun = $tahun;
        $data->save();
        return redirect('/create/spp');
    }

    public function storeentri (Request $request, $id) {
        $siswa_id = Siswa::find($id)->id; 
        $petugas_id = Session::get('user')->id;
        $spp_id = Siswa::find($id)->spp_id;
        // $tgl_bayar = $request->tgl_bayar; 
        $bulan_dibayar = $request->bulan_dibayar; 
        $tahun_dibayar = $request->tahun_dibayar; 

        $data = new Pembayaran();
        $data->siswa_id = $siswa_id;
        $data->spp_id = $spp_id;
        $data->petugas_id = $petugas_id;
        $data->tgl_bayar = date('Y-m-d H:i:s');
        $data->bulan_dibayar = $bulan_dibayar;
        $data->tahun_dibayar = $tahun_dibayar;
        $data->save();

        Siswa::where('id', $id)->update([
            'spp_id' => 1,
        ]);

        return redirect('/create/siswaspp');
    }

    public function updatesiswaspp (Request $request, $id) {
        Siswa::where('id', $id)->update([
            'spp_id' => $request->spp_id,
        ]);

        return redirect('create/siswaspp');
    }

    public function carisiswa (Request $request) {
        $cari = $request->cari;

        $siswa = Siswa::where('id','like',"%".$cari."%")->get();

        return redirect('create/entri', compact('siswa'));
    }
    
}