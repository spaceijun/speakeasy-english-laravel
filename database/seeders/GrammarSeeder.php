<?php

namespace Database\Seeders;

use App\Models\Grammar;
use Illuminate\Database\Seeder;

class GrammarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $grammars = [
            [
                'category_id' => 2,
                'name' => 'Subject-Verb Agreement',
                'images' => 'images/grammar/subject-verb.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Parts of Speech',
                'images' => 'images/grammar/parts-of-speech.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Sentence Structure',
                'images' => 'images/grammar/sentence-structure.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Articles',
                'images' => 'images/grammar/articles.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Pronouns',
                'images' => 'images/grammar/pronouns.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Conjunctions',
                'images' => 'images/grammar/conjunctions.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Adverbs',
                'images' => 'images/grammar/adverbs.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Nouns',
                'images' => 'images/grammar/nouns.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Verbs',
                'images' => 'images/grammar/verbs.png',
            ],
            [
                'category_id' => 2,
                'name' => 'Adjectives',
                'images' => 'images/grammar/adjectives.png',
            ],
        ];

        foreach ($grammars as $grammar) {
            Grammar::create($grammar);
        }
    }
}
