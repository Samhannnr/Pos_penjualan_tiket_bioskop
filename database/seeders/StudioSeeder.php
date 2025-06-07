<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('studio')->insert([
            [
                'nama' => 'Studio 1',
                'kapasitas' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio 2',
                'kapasitas' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio 3',
                'kapasitas' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio Deluxe',
                'kapasitas' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio VIP',
                'kapasitas' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio IMAX',
                'kapasitas' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio Dolby Atmos',
                'kapasitas' => 95,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio Keluarga',
                'kapasitas' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio Couple',
                'kapasitas' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Studio Premier',
                'kapasitas' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
