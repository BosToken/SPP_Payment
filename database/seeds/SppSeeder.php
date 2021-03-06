<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spps')->insert([
            'id' => '1',
            'nominal' => 'Tidak Ada Tagihan',
            'tahun' => '2021',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('spps')->insert([
            'id' => '2',
            'tahun' => '2021',
            'nominal' => '500000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
