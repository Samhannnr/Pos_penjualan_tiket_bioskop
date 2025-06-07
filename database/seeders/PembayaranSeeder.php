<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembayaran;
use App\Models\Tiket;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PembayaranSeeder extends Seeder
{
    public function run(): void
    {
        $tiketList = Tiket::all();

        foreach ($tiketList as $tiket) {
            Pembayaran::create([
                'tiket_id' => $tiket->id,
                'jumlah_pembayaran' => $tiket->total_harga,
                'tanggal_bayar' => Carbon::now()->subDays(rand(1, 30)),
                'status_pembayaran' => collect(['Lunas', 'Pending', 'Gagal'])->random(),
            ]);
        }
    }
}
