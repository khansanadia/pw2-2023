<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Romantis',
            'deskripsi' => 'sangat meyentuh hati',
        ]);

        Genre::create([
            'nama' => 'Komedi',
            'deskripsi' => 'sangat lucu',
        ]);

        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'Sangat Menegangkan',
        ]);

        Genre::create([
            'nama' => 'Action',
            'deskripsi' => 'sangat membuat tegang',
        ]);

        Genre::create([
            'nama' => 'Fantasy',
            'deskripsi' => 'sangat di luar nalar',
        ]);
    }
}
