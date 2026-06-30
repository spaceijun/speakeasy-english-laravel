<?php

namespace Database\Seeders;

use App\Models\Idiom;
use Illuminate\Database\Seeder;

class IdiomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idioms = [
            [
                'category_id' => 4,
                'name' => 'Animal Idioms',
                'description' => 'Idiom yang menggunakan nama hewan',
            ],
            [
                'category_id' => 4,
                'name' => 'Body Part Idioms',
                'description' => 'Idiom yang menggunakan bagian tubuh',
            ],
            [
                'category_id' => 4,
                'name' => 'Color Idioms',
                'description' => 'Idiom yang menggunakan nama warna',
            ],
            [
                'category_id' => 4,
                'name' => 'Food Idioms',
                'description' => 'Idiom yang menggunakan makanan',
            ],
            [
                'category_id' => 4,
                'name' => 'Weather Idioms',
                'description' => 'Idiom yang menggunakan cuaca',
            ],
            [
                'category_id' => 4,
                'name' => 'Money Idioms',
                'description' => 'Idiom yang berhubungan dengan uang',
            ],
            [
                'category_id' => 4,
                'name' => 'Time Idioms',
                'description' => 'Idiom yang berhubungan dengan waktu',
            ],
            [
                'category_id' => 4,
                'name' => 'Nature Idioms',
                'description' => 'Idiom yang menggunakan unsur alam',
            ],
            [
                'category_id' => 4,
                'name' => 'Emotion Idioms',
                'description' => 'Idiom untuk mengekspresikan perasaan',
            ],
            [
                'category_id' => 4,
                'name' => 'Business Idioms',
                'description' => 'Idiom yang sering digunakan dalam dunia bisnis',
            ],
        ];

        foreach ($idioms as $idiom) {
            Idiom::create($idiom);
        }
    }
}
