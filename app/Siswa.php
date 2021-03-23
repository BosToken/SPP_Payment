<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'nis',
        'nama',
        'kelas_id',
        'alamat',
        'no_telp',
    ];
    public function spps () {
        return $this->belongsTo('App\Spp', 'spp_id');
    }
    public function kelass () {
        return $this->belongsTo('App\Kelas', 'kelas_id');
    }
}
