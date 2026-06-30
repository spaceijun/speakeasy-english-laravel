<?php

namespace Database\Seeders;

use App\Models\TugasFrasa;
use Illuminate\Database\Seeder;

class TugasFrasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'frasa_id' => 1,
                'kkm' => '70',
                'body_questions' => 'How to greet someone in the morning?'
            ],
            [
                'frasa_id' => 2,
                'kkm' => '70',
                'body_questions' => 'Polite way to ask for something'
            ],
            [
                'frasa_id' => 3,
                'kkm' => '70',
                'body_questions' => 'How to express your opinion?'
            ],
            [
                'frasa_id' => 4,
                'kkm' => '70',
                'body_questions' => 'How to give advice?'
            ],
            [
                'frasa_id' => 5,
                'kkm' => '70',
                'body_questions' => 'How to apologize?'
            ],
            [
                'frasa_id' => 6,
                'kkm' => '70',
                'body_questions' => 'How to ask for help?'
            ],
            [
                'frasa_id' => 7,
                'kkm' => '70',
                'body_questions' => 'How to agree with someone?'
            ],
            [
                'frasa_id' => 7,
                'kkm' => '70',
                'body_questions' => 'How to agree with someone?'
            ],
            [
                'frasa_id' => 8,
                'kkm' => '70',
                'body_questions' => 'How to start a conversation with a stranger?'
            ],
            [
                'frasa_id' => 9,
                'kkm' => '70',
                'body_questions' => 'How to end a conversation politely?'
            ],
            [
                'frasa_id' => 10,
                'kkm' => '70',
                'body_questions' => 'How to answer a phone?'
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasFrasa::create($tugas);
        }
    }
}
