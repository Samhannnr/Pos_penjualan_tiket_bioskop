<?php
// app/Models/Tiket.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tiket extends Model
{
    use HasFactory;

    protected $table = 'tiket';

    protected $fillable = [
        'jadwal_id',
        'pelanggan_id',
        'jumlah',
        'total_harga'
    ];

    // Relasi dengan model Pelanggan
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    // Relasi dengan model Jadwal
    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
