<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cek apakah user sudah ada untuk mencegah error duplikat email
        if (!User::where('email', 'admin@example.com')->exists()) {
            User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@example.com',
                'role' => 'admin'
            ]);
        }

        // Jalankan semua seeder yang dibutuhkan
        $this->call([
            HomeSeeder::class, // Di dalamnya sudah memanggil PelangganSeeder, TiketSeeder, PembayaranSeeder, dll
        ]);
    }
}
