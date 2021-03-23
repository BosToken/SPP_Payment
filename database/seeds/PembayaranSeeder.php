<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayarans')->insert([
            'id' => '1',
            'petugas_id' => '1',
            'siswa_id' => '0030373484',
            'bulan_dibayar' => 'Maret',
            'tgl_bayar' => '2021-03-08 00:00:00',
            'tahun_dibayar' => '2021',
            'spp_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}