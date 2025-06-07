<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        // Jalankan seeders terkait dashboard
        $this->call([
            PelangganSeeder::class,
            JadwalSeeder::class,     // pastikan kamu punya JadwalSeeder
            TiketSeeder::class,
            PembayaranSeeder::class,
        ]);
    }
}
