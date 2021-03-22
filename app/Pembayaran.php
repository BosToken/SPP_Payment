<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $fillable = [
        'petugas',
        'siswa_id',
        'bulan_dibayar',
        'tahun_dibayar',
        'spp_id',
    ];
    public function siswas () {
        return $this->belongsTo('App\Siswa', 'siswa_id', 'spp_id');
    }
    public function petugass () {
        return $this->belongsTo('App\Petugas', 'petugas_id');
    }
}
