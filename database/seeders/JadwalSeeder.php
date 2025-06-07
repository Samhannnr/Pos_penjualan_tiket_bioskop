<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('jadwal')->insert([
            [
                'film_id' => 1,
                'studio_id' => 1,
                'waktu_tayang' => Carbon::parse('2025-05-10 14:00:00'),
                'harga_tiket' => 100000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 2,
                'studio_id' => 2,
                'waktu_tayang' => Carbon::parse('2025-05-10 17:30:00'),
                'harga_tiket' => 120000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 3,
                'studio_id' => 1,
                'waktu_tayang' => Carbon::parse('2025-05-11 13:45:00'),
                'harga_tiket' => 135000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 4,
                'studio_id' => 3,
                'waktu_tayang' => Carbon::parse('2025-05-11 18:00:00'),
                'harga_tiket' => 95000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 5,
                'studio_id' => 2,
                'waktu_tayang' => Carbon::parse('2025-05-12 16:00:00'),
                'harga_tiket' => 110000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 6,
                'studio_id' => 1,
                'waktu_tayang' => Carbon::parse('2025-05-12 19:30:00'),
                'harga_tiket' => 145000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 7,
                'studio_id' => 3,
                'waktu_tayang' => Carbon::parse('2025-05-13 12:00:00'),
                'harga_tiket' => 125000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 8,
                'studio_id' => 2,
                'waktu_tayang' => Carbon::parse('2025-05-13 15:30:00'),
                'harga_tiket' => 90000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 9,
                'studio_id' => 1,
                'waktu_tayang' => Carbon::parse('2025-05-14 10:00:00'),
                'harga_tiket' => 100000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'film_id' => 10,
                'studio_id' => 3,
                'waktu_tayang' => Carbon::parse('2025-05-14 20:00:00'),
                'harga_tiket' => 115000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
