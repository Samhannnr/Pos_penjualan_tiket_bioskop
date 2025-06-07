<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran'; // Pastikan nama tabel eksplisit

    protected $fillable = [
        'tiket_id',
        'jumlah_pembayaran',
        'tanggal_bayar',
        'status_pembayaran',
    ];

    public function tiket()
    {
        return $this->belongsTo(Tiket::class, 'tiket_id');
    }
}
