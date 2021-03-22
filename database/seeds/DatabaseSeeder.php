<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(PembayaranSeeder::class);
        $this->call(PetugasSeeder::class);
        $this->call(SiswaSeeder::class);
        $this->call(SppSeeder::class);
    }
}
