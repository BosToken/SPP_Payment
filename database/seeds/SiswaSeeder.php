<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'id' => '0030373484',
            'nis' => '5892/2155.065',
            'nama' => 'Faiz Diandra Maulana',
            'kelas_id' => '3',
            'alamat' => 'Pabrik Pembuangan Limbah',
            'no_telp' => '081232857502',
            'spp_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('siswas')->insert([
            'id' => '0030373481',
            'nis' => '5892/2155.055',
            'nama' => 'BosToken',
            'kelas_id' => '3',
            'alamat' => 'Sarang Tawon',
            'no_telp' => '081232857501',
            'spp_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
