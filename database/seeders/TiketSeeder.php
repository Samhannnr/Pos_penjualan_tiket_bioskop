<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Jadwal;
use App\Models\Pelanggan;

class TiketSeeder extends Seeder
{
    public function run(): void
    {
        $jadwalIds = Jadwal::pluck('id')->toArray();
        $pelangganIds = Pelanggan::pluck('id')->toArray();

        // Cek apakah data tersedia
        if (empty($jadwalIds) || empty($pelangganIds)) {
            $this->command->warn('Jadwal atau Pelanggan belum tersedia. Jalankan seeder terkait terlebih dahulu.');
            return;
        }

        // Masukkan 10 tiket acak
        for ($i = 0; $i < 10; $i++) {
            $jumlah = rand(1, 5);
            $jadwalId = $jadwalIds[array_rand($jadwalIds)];
            $harga = Jadwal::find($jadwalId)->harga_tiket;
            $totalHarga = $harga * $jumlah;

            DB::table('tiket')->insert([
                'pelanggan_id' => $pelangganIds[array_rand($pelangganIds)],
                'jadwal_id' => $jadwalId,
                'jumlah' => $jumlah,
                'total_harga' => $totalHarga,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
