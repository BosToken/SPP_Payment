<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelass';
    protected $fillable = [
        'nama_kelas',
        'kompetensi_keahlian',
    ];
    public function siswas () {
        return $this->hasMany('App\Siswa', 'siswa_id');
    }
}
