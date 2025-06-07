<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('film')->insert([
            // Film Luar Negeri
            [
                'judul' => 'Dune: Part Two',
                'durasi' => 166,
                'rating' => 'PG-13',
                'genre' => 'Sci-Fi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Godzilla x Kong: The New Empire',
                'durasi' => 115,
                'rating' => 'PG-13',
                'genre' => 'Action',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Oppenheimer',
                'durasi' => 180,
                'rating' => 'R',
                'genre' => 'Biography',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Barbie',
                'durasi' => 114,
                'rating' => 'PG-13',
                'genre' => 'Comedy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Spider-Man: Across the Spider-Verse',
                'durasi' => 140,
                'rating' => 'PG',
                'genre' => 'Animation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Avatar: The Way of Water',
                'durasi' => 192,
                'rating' => 'PG-13',
                'genre' => 'Sci-Fi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'John Wick: Chapter 4',
                'durasi' => 169,
                'rating' => 'R',
                'genre' => 'Action',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'The Super Mario Bros. Movie',
                'durasi' => 92,
                'rating' => 'PG',
                'genre' => 'Animation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Wonka',
                'durasi' => 116,
                'rating' => 'PG',
                'genre' => 'Musical',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'The Marvels',
                'durasi' => 105,
                'rating' => 'PG-13',
                'genre' => 'Superhero',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Film Dalam Negeri
            [
                'judul' => 'Pengabdi Setan',
                'durasi' => 107,
                'rating' => 'R',
                'genre' => 'Horror',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Laskar Pelangi',
                'durasi' => 120,
                'rating' => 'PG',
                'genre' => 'Drama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Ada Apa dengan Cinta?',
                'durasi' => 105,
                'rating' => 'PG-13',
                'genre' => 'Romance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'The Raid: Redemption',
                'durasi' => 101,
                'rating' => 'R',
                'genre' => 'Action',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Keluarga Cemara',
                'durasi' => 95,
                'rating' => 'PG',
                'genre' => 'Family',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Talaq 3',
                'durasi' => 85,
                'rating' => 'R',
                'genre' => 'Drama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Cek Toko Sebelah',
                'durasi' => 120,
                'rating' => 'PG-13',
                'genre' => 'Comedy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Merah Putih',
                'durasi' => 120,
                'rating' => 'PG',
                'genre' => 'Historical',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Dilan 1990',
                'durasi' => 105,
                'rating' => 'PG-13',
                'genre' => 'Romance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Gundala',
                'durasi' => 123,
                'rating' => 'PG-13',
                'genre' => 'Superhero',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
