<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugass';
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'level',
    ];
    public function pembayarans () {
        return $this->hasMany('App\Pembayaran', 'pembayaran_id');
    }
}
