<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id(); // default kolom id
            $table->string('Judul');
            $table->integer('Durasi'); // dalam menit
            $table->string('Rating');
            $table->string('Genre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('film');
    }
}
