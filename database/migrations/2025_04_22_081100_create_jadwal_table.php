<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('studio_id');
            $table->dateTime('waktu_tayang');
            $table->decimal('harga_tiket', 10, 2);
            $table->timestamps();

            // Foreign key
            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade');
            $table->foreign('studio_id')->references('id')->on('studio')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal');
    }
}
