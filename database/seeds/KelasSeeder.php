<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelass')->insert([
            'id' => '1',
            'nama_kelas' => 'XII 1',
            'kompetensi_keahlian' => 'RPL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '2',
            'nama_kelas' => 'XII 2',
            'kompetensi_keahlian' => 'RPL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '3',
            'nama_kelas' => 'XII 3',
            'kompetensi_keahlian' => 'RPL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '4',
            'nama_kelas' => 'XII 4',
            'kompetensi_keahlian' => 'RPL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '5',
            'nama_kelas' => 'XII 5',
            'kompetensi_keahlian' => 'RPL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '6',
            'nama_kelas' => 'XII 6',
            'kompetensi_keahlian' => 'RPL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '7',
            'nama_kelas' => 'XII 7',
            'kompetensi_keahlian' => 'RPL',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '8',
            'nama_kelas' => 'XII 1',
            'kompetensi_keahlian' => 'TKJ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '9',
            'nama_kelas' => 'XII 2',
            'kompetensi_keahlian' => 'TKJ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '10',
            'nama_kelas' => 'XII 3',
            'kompetensi_keahlian' => 'TKJ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '11',
            'nama_kelas' => 'XII 4',
            'kompetensi_keahlian' => 'TKJ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '12',
            'nama_kelas' => 'XII 5',
            'kompetensi_keahlian' => 'TKJ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kelass')->insert([
            'id' => '13',
            'nama_kelas' => 'XII 6',
            'kompetensi_keahlian' => 'TKJ',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
