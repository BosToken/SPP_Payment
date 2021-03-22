<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spps';
    protected $fillable = [
        'tahun',
        'nominal',
    ];
    public function siswas () {
        return $this->belongsTo('App\Siswa', 'spps_id');
    }
}
