<?php

namespace Database\Seeders;

use App\Models\TugasIdiom;
use Illuminate\Database\Seeder;

class TugasIdiomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'idiom_id' => 1,
                'kkm' => '70',
                'body_questions' => 'Animal idioms practice'
            ],
            [
                'idiom_id' => 2,
                'kkm' => '70',
                'body_questions' => 'Body part idioms exercises'
            ],
            [
                'idiom_id' => 3,
                'kkm' => '70',
                'body_questions' => 'Color idioms practice'
            ],
            [
                'idiom_id' => 4,
                'kkm' => '70',
                'body_questions' => 'Food idioms exercises'
            ],
            [
                'idiom_id' => 5,
                'kkm' => '70',
                'body_questions' => 'Weather idioms practice'
            ],
            [
                'idiom_id' => 6,
                'kkm' => '70',
                'body_questions' => 'Money idioms exercises'
            ],
            [
                'idiom_id' => 7,
                'kkm' => '70',
                'body_questions' => 'Time idioms practice'
            ],
            [
                'idiom_id' => 8,
                'kkm' => '70',
                'body_questions' => 'Nature idioms exercises'
            ],
            [
                'idiom_id' => 9,
                'kkm' => '70',
                'body_questions' => 'Emotion idioms practice'
            ],
            [
                'idiom_id' => 10,
                'kkm' => '70',
                'body_questions' => 'Business idioms exercises'
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasIdiom::create($tugas);
        }
    }
}
