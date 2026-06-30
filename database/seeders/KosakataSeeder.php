<?php

namespace Database\Seeders;

use App\Models\Kosakata;
use Illuminate\Database\Seeder;

class KosakataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kosakatas = [
            [
                'category_id' => 1,
                'name' => 'Daily Activities',
                'images' => 'images/kosakata/daily-activities.png',
                'description' => 'Kosakata untuk aktivitas sehari-hari',
            ],
            [
                'category_id' => 1,
                'name' => 'Food and Drinks',
                'images' => 'images/kosakata/food-drinks.png',
                'description' => 'Kosakata makanan dan minuman',
            ],
            [
                'category_id' => 1,
                'name' => 'Travel Vocabulary',
                'images' => 'images/kosakata/travel.png',
                'description' => 'Kosakata untuk bepergian',
            ],
            [
                'category_id' => 1,
                'name' => 'Health and Body',
                'images' => 'images/kosakata/health-body.png',
                'description' => 'Kosakata kesehatan dan bagian tubuh',
            ],
            [
                'category_id' => 1,
                'name' => 'Technology',
                'images' => 'images/kosakata/technology.png',
                'description' => 'Kosakata teknologi modern',
            ],
            [
                'category_id' => 1,
                'name' => 'Education',
                'images' => 'images/kosakata/education.png',
                'description' => 'Kosakata dunia pendidikan',
            ],
            [
                'category_id' => 1,
                'name' => 'Nature',
                'images' => 'images/kosakata/nature.png',
                'description' => 'Kosakata tentang alam',
            ],
            [
                'category_id' => 1,
                'name' => 'Shopping',
                'images' => 'images/kosakata/shopping.png',
                'description' => 'Kosakata untuk berbelanja',
            ],
            [
                'category_id' => 1,
                'name' => 'Work and Jobs',
                'images' => 'images/kosakata/work.png',
                'description' => 'Kosakata dunia kerja',
            ],
            [
                'category_id' => 1,
                'name' => 'Emotions',
                'images' => 'images/kosakata/emotions.png',
                'description' => 'Kosakata perasaan dan emosi',
            ],
        ];

        foreach ($kosakatas as $kosakata) {
            Kosakata::create($kosakata);
        }
    }
}
