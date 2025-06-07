<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwal';
    protected $fillable = ['film_id', 'studio_id', 'waktu_tayang', 'harga_tiket'];
    
    public function film() {
        return $this->belongsTo(Film::class);
    }
    
    public function studio() {
        return $this->belongsTo(Studio::class);
    }
    
}
