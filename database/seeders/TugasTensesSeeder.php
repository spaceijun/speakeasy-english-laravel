<?php

namespace Database\Seeders;

use App\Models\TugasTense;
use Illuminate\Database\Seeder;

class TugasTensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'tenses_id' => 1,
                'kkm' => '70',
                'body_questions' => 'Present Simple Tense exercises'
            ],
            [
                'tenses_id' => 2,
                'kkm' => '70',
                'body_questions' => 'Present Continuous Tense practice'
            ],
            [
                'tenses_id' => 3,
                'kkm' => '70',
                'body_questions' => 'Past Simple Tense exercises'
            ],
            [
                'tenses_id' => 4,
                'kkm' => '70',
                'body_questions' => 'Past Continuous Tense practice'
            ],
            [
                'tenses_id' => 5,
                'kkm' => '70',
                'body_questions' => 'Present Perfect Tense exercises'
            ],
            [
                'tenses_id' => 6,
                'kkm' => '70',
                'body_questions' => 'Present Perfect Continuous practice'
            ],
            [
                'tenses_id' => 7,
                'kkm' => '70',
                'body_questions' => 'Past Perfect Tense exercises'
            ],
            [
                'tenses_id' => 8,
                'kkm' => '70',
                'body_questions' => 'Future Simple Tense practice'
            ],
            [
                'tenses_id' => 9,
                'kkm' => '70',
                'body_questions' => 'Future Continuous Tense exercises'
            ],
            [
                'tenses_id' => 10,
                'kkm' => '70',
                'body_questions' => 'Future Perfect Tense practice'
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasTense::create($tugas);
        }
    }
}
