<?php

namespace Database\Seeders;

use App\Models\MateriKosakata;
use Illuminate\Database\Seeder;

class MateriKosakataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materis = [
            // Daily Activities (kosakatas_id = 1)
            [
                'kosakatas_id' => 1,
                'english' => 'Wake up',
                'indonesian' => 'Bangun tidur'
            ],
            [
                'kosakatas_id' => 1,
                'english' => 'Take a shower',
                'indonesian' => 'Mandi'
            ],
            // Food and Drinks (kosakatas_id = 2)
            [
                'kosakatas_id' => 2,
                'english' => 'Breakfast',
                'indonesian' => 'Makan pagi'
            ],
            [
                'kosakatas_id' => 2,
                'english' => 'Lunch',
                'indonesian' => 'Makan siang'
            ],
            [
                'kosakatas_id' => 2,
                'english' => 'Dinner',
                'indonesian' => 'Makan malam'
            ],
            // Travel Vocabulary (kosakatas_id = 3)
            [
                'kosakatas_id' => 3,
                'english' => 'Airport',
                'indonesian' => 'Bandara'
            ],
            [
                'kosakatas_id' => 3,
                'english' => 'Passport',
                'indonesian' => 'Paspor'
            ],
            // Health and Body (kosakatas_id = 4)
            [
                'kosakatas_id' => 4,
                'english' => 'Headache',
                'indonesian' => 'Sakit kepala'
            ],
            [
                'kosakatas_id' => 4,
                'english' => 'Fever',
                'indonesian' => 'Demam'
            ],
            // Technology (kosakatas_id = 5)
            [
                'kosakatas_id' => 5,
                'english' => 'Smartphone',
                'indonesian' => 'Ponsel cerdas'
            ],
        ];

        foreach ($materis as $materi) {
            MateriKosakata::create($materi);
        }
    }
}
