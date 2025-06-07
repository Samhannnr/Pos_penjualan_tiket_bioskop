<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Studio extends Model
{
    use HasFactory;

    protected $table = 'studio';
    protected $fillable = ['nama', 'kapasitas'];
    protected $guarded = ['created_at', 'updated_at'];
}
