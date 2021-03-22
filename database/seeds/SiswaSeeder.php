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
            'nama' => 'Faiz',
            'kelas_id' => '3',
            'alamat' => 'Pabrik Pembuangan Limbah',
            'no_telp' => '081232857502',
            'spp_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
