<?php

namespace Database\Seeders;

use App\Models\DetailGrammar;
use Illuminate\Database\Seeder;

class DetailGrammarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Note: detail_grammars table doesn't have grammars_id column (it's commented in migration)
     */
    public function run(): void
    {
        $details = [
            ['name' => 'Basic Subject-Verb Rules', 'images' => 'images/detail-grammar/subject-verb-basic.png'],
            ['name' => 'Singular and Plural', 'images' => 'images/detail-grammar/singular-plural.png'],
            ['name' => 'Nouns and Pronouns', 'images' => 'images/detail-grammar/nouns-pronouns.png'],
            ['name' => 'Verbs and Adverbs', 'images' => 'images/detail-grammar/verbs-adverbs.png'],
            ['name' => 'Simple Sentences', 'images' => 'images/detail-grammar/simple-sentence.png'],
            ['name' => 'Compound Sentences', 'images' => 'images/detail-grammar/compound-sentence.png'],
            ['name' => 'Definite Articles (a, an, the)', 'images' => 'images/detail-grammar/definite-articles.png'],
            ['name' => 'Indefinite Articles', 'images' => 'images/detail-grammar/indefinite-articles.png'],
            ['name' => 'Personal Pronouns', 'images' => 'images/detail-grammar/personal-pronouns.png'],
            ['name' => 'Possessive Pronouns', 'images' => 'images/detail-grammar/possessive-pronouns.png'],
        ];

        foreach ($details as $detail) {
            DetailGrammar::create($detail);
        }
    }
}
