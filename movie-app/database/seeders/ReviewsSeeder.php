<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'The Conjuring',
            'user' => 'Michale Saves',
            'rating' => '7.5',
            'review' => 'B aja',
            'tanggal' => '2013-09-13',
        ]);

        Review::create([
            'film' => 'Annable',
            'user' => 'Geri Dauberman',
            'rating' => '8.0',
            'review' => 'Lumayan',
            'tanggal' => '2019-07-25',
        ]);

        Review::create([
            'film' => 'Insidious',
            'user' => 'Leigh Whannell',
            'rating' => '9.0',
            'review' => 'Mengerikan',
            'tanggal' => '2010-12-12',
        ]);

        Review::create([
            'film' => 'Alice in Wonderland',
            'user' => 'Tim Burton',
            'rating' => '7.2',
            'review' => 'Bagus',
            'tanggal' => '2010-11-30',
        ]);

        Review::create([
            'film' => 'Jalan yang Jauh, Jangan Lupa Pulang',
            'user' => 'Angga Dwi',
            'rating' => '8.0',
            'review' => 'Bagus',
            'tanggal' => '2023-08-30',
        ]);
    }
}
