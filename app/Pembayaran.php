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
        return $this->belongsTo('App\Siswa', 'siswa_id');
    }
    public function petugass () {
        return $this->belongsTo('App\Petugas', 'petugas_id');
    }
    public function spps () {
        return $this->belongsTo('App\Spp', 'spp_id');
    }
}
