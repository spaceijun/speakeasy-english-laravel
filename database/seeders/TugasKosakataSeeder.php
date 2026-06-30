<?php

namespace Database\Seeders;

use App\Models\TugasKosakata;
use Illuminate\Database\Seeder;

class TugasKosakataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'kosakatas_id' => 1,
                'kkm' => '70',
                'body_questions' => 'Daily activities vocabulary'
            ],
            [
                'kosakatas_id' => 2,
                'kkm' => '70',
                'body_questions' => 'Food and drinks vocabulary'
            ],
            [
                'kosakatas_id' => 3,
                'kkm' => '70',
                'body_questions' => 'Travel vocabulary'
            ],
            [
                'kosakatas_id' => 4,
                'kkm' => '70',
                'body_questions' => 'Health and body vocabulary'
            ],
            [
                'kosakatas_id' => 5,
                'kkm' => '70',
                'body_questions' => 'Technology vocabulary'
            ],
            [
                'kosakatas_id' => 6,
                'kkm' => '70',
                'body_questions' => 'Education vocabulary'
            ],
            [
                'kosakatas_id' => 7,
                'kkm' => '70',
                'body_questions' => 'Nature vocabulary'
            ],
            [
                'kosakatas_id' => 8,
                'kkm' => '70',
                'body_questions' => 'Shopping vocabulary'
            ],
            [
                'kosakatas_id' => 9,
                'kkm' => '70',
                'body_questions' => 'Work and jobs vocabulary'
            ],
            [
                'kosakatas_id' => 10,
                'kkm' => '70',
                'body_questions' => 'Emotions vocabulary'
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasKosakata::create($tugas);
        }
    }
}
