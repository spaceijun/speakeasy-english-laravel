<?php

namespace Database\Seeders;

use App\Models\TugasHafalan;
use Illuminate\Database\Seeder;

class TugasHafalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'hafalan_id' => 1,
                'kkm' => '70',
                'body_questions' => 'Translate greeting phrases'
            ],
            [
                'hafalan_id' => 2,
                'kkm' => '70',
                'body_questions' => 'Write numbers in English'
            ],
            [
                'hafalan_id' => 3,
                'kkm' => '70',
                'body_questions' => 'Days and months vocabulary'
            ],
            [
                'hafalan_id' => 4,
                'kkm' => '70',
                'body_questions' => 'Common verbs exercises'
            ],
            [
                'hafalan_id' => 5,
                'kkm' => '70',
                'body_questions' => 'Adjectives practice'
            ],
            [
                'hafalan_id' => 6,
                'kkm' => '70',
                'body_questions' => 'Prepositions usage'
            ],
            [
                'hafalan_id' => 7,
                'kkm' => '70',
                'body_questions' => 'Question words practice'
            ],
            [
                'hafalan_id' => 8,
                'kkm' => '70',
                'body_questions' => 'Time expressions'
            ],
            [
                'hafalan_id' => 9,
                'kkm' => '70',
                'body_questions' => 'Color names vocabulary'
            ],
            [
                'hafalan_id' => 10,
                'kkm' => '70',
                'body_questions' => 'Family members vocabulary'
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasHafalan::create($tugas);
        }
    }
}
