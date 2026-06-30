<?php

namespace Database\Seeders;

use App\Models\TugasGrammar;
use Illuminate\Database\Seeder;

class TugasGrammarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'grammars_id' => 1,
                'kkm' => '70',
                'body_questions' => 'Subject-verb agreement exercises'
            ],
            [
                'grammars_id' => 2,
                'kkm' => '70',
                'body_questions' => 'Parts of speech practice'
            ],
            [
                'grammars_id' => 3,
                'kkm' => '70',
                'body_questions' => 'Sentence structure exercises'
            ],
            [
                'grammars_id' => 4,
                'kkm' => '70',
                'body_questions' => 'Articles usage practice'
            ],
            [
                'grammars_id' => 5,
                'kkm' => '70',
                'body_questions' => 'Pronouns exercises'
            ],
            [
                'grammars_id' => 6,
                'kkm' => '70',
                'body_questions' => 'Conjunctions practice'
            ],
            [
                'grammars_id' => 7,
                'kkm' => '70',
                'body_questions' => 'Adverbs exercises'
            ],
            [
                'grammars_id' => 8,
                'kkm' => '70',
                'body_questions' => 'Nouns practice'
            ],
            [
                'grammars_id' => 9,
                'kkm' => '70',
                'body_questions' => 'Verbs exercises'
            ],
            [
                'grammars_id' => 10,
                'kkm' => '70',
                'body_questions' => 'Adjectives practice'
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasGrammar::create($tugas);
        }
    }
}
