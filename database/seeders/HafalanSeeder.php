<?php

namespace Database\Seeders;

use App\Models\Hafalan;
use Illuminate\Database\Seeder;

class HafalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hafalans = [
            [
                'category_id' => 6,
                'name' => 'Daily Greetings',
                'images' => 'images/hafalan/daily-greetings.png',
                'description' => 'Kumpulan sapaan sehari-hari yang sering digunakan',
            ],
            [
                'category_id' => 6,
                'name' => 'Numbers 1-100',
                'images' => 'images/hafalan/numbers.png',
                'description' => 'Hafalan angka dalam bahasa Inggris',
            ],
            [
                'category_id' => 6,
                'name' => 'Days and Months',
                'images' => 'images/hafalan/days-months.png',
                'description' => 'Nama-nama hari dan bulan dalam bahasa Inggris',
            ],
            [
                'category_id' => 6,
                'name' => 'Common Verbs',
                'images' => 'images/hafalan/common-verbs.png',
                'description' => 'Kumpulan kata kerja yang sering digunakan',
            ],
            [
                'category_id' => 6,
                'name' => 'Adjectives List',
                'images' => 'images/hafalan/adjectives.png',
                'description' => 'Kumpulan kata sifat untuk memperkaya vocabulary',
            ],
            [
                'category_id' => 6,
                'name' => 'Prepositions',
                'images' => 'images/hafalan/prepositions.png',
                'description' => 'Kata depan dalam bahasa Inggris',
            ],
            [
                'category_id' => 6,
                'name' => 'Question Words',
                'images' => 'images/hafalan/question-words.png',
                'description' => 'Kata tanya untuk membuat pertanyaan',
            ],
            [
                'category_id' => 6,
                'name' => 'Time Expressions',
                'images' => 'images/hafalan/time-expressions.png',
                'description' => 'Ungkapan waktu yang sering digunakan',
            ],
            [
                'category_id' => 6,
                'name' => 'Color Names',
                'images' => 'images/hafalan/colors.png',
                'description' => 'Nama-nama warna dalam bahasa Inggris',
            ],
            [
                'category_id' => 6,
                'name' => 'Family Members',
                'images' => 'images/hafalan/family.png',
                'description' => 'Istilah untuk anggota keluarga',
            ],
        ];

        foreach ($hafalans as $hafalan) {
            Hafalan::create($hafalan);
        }
    }
}
