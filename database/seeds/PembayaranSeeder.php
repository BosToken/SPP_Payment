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
            'siswa_id' => '1',
            'bulan_dibayar' => 'Maret',
            'tahun_dibayar' => '2021',
            'spp_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
