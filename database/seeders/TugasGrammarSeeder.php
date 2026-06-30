<?php

namespace Database\Seeders;

use App\Models\TugasGrammar;
use Illuminate\Database\Seeder;

class TugasGrammarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Foreign key: grammars_id -> detail_grammars (DetailGrammar)
     */
    public function run(): void
    {
        $tugass = [
            [
                'grammars_id' => 1,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'He ___ to school every day. (go)', 'answer' => 'goes'],
                    ['question' => 'They ___ football on Sunday. (play)', 'answer' => 'play'],
                    ['question' => 'She ___ a student. (be)', 'answer' => 'is'],
                    ['question' => 'Correct: "She dont like coffee."', 'answer' => 'She doesnt like coffee.'],
                    ['question' => 'Choose: He (walk/walks) to office.', 'answer' => 'walks'],
                ]),
            ],
            [
                'grammars_id' => 2,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What type of word is "quickly"?', 'answer' => 'Adverb'],
                    ['question' => '"Beautiful" is a ___ (noun/adj/verb)', 'answer' => 'Adjective'],
                    ['question' => 'Identify: "The cat runs fast."', 'answer' => 'The(cat=adj/n), cat(subject), runs(verb), fast(adv)'],
                    ['question' => 'What part of speech is "and"?', 'answer' => 'Conjunction'],
                    ['question' => 'Give an example of a pronoun', 'answer' => 'He, she, they, it, we, you, I'],
                ]),
            ],
            [
                'grammars_id' => 3,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Make a sentence with S-V-O pattern', 'answer' => 'She reads books.'],
                    ['question' => 'What is the pattern: "She is happy"?', 'answer' => 'S-V-C (Subject-Verb-Complement)'],
                    ['question' => 'Identify subject: "The dog barks loudly."', 'answer' => 'The dog'],
                    ['question' => 'Give a compound sentence with "and"', 'answer' => 'I like tea and she likes coffee.'],
                    ['question' => 'What type of sentence is "Go away!"?', 'answer' => 'Imperative'],
                ]),
            ],
            [
                'grammars_id' => 4,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Use "a" or "an": ___ apple', 'answer' => 'an'],
                    ['question' => 'Use "a" or "an": ___ university', 'answer' => 'a'],
                    ['question' => 'When do we use "the"?', 'answer' => 'For specific things / known nouns'],
                    ['question' => 'Complete: ___ sun is bright.', 'answer' => 'The'],
                    ['question' => '"A/an" is called ___ article', 'answer' => 'Indefinite'],
                ]),
            ],
            [
                'grammars_id' => 5,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Give a personal pronoun', 'answer' => 'I, you, he, she, it, we, they'],
                    ['question' => 'Object pronoun for "I"', 'answer' => 'Me'],
                    ['question' => 'Possessive pronoun: "This is ___ book."', 'answer' => 'my / mine'],
                    ['question' => 'Reflexive pronoun example', 'answer' => 'Myself, yourself, himself, herself, themselves'],
                    ['question' => 'What pronoun replaces "John"?', 'answer' => 'He (subject) / Him (object)'],
                ]),
            ],
            [
                'grammars_id' => 6,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Join: I was tired. I went home. (so)', 'answer' => 'I was tired, so I went home.'],
                    ['question' => 'Join: He studied hard. He passed. (therefore)', 'answer' => 'He studied hard; therefore, he passed.'],
                    ['question' => 'Conjunction for contrast', 'answer' => 'But, although, however, yet'],
                    ['question' => 'Join: It rained. We went out. (although)', 'answer' => 'Although it rained, we went out.'],
                    ['question' => 'Coordinating conjunctions', 'answer' => 'For, and, nor, but, or, yet, so (FANBOYS)'],
                ]),
            ],
            [
                'grammars_id' => 7,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "quickly" modify?', 'answer' => 'Verb (runs quickly)'],
                    ['question' => 'Adverb form of "careful"?', 'answer' => 'Carefully'],
                    ['question' => 'Place adverb: She sings ___. (beautiful)', 'answer' => 'beautifully'],
                    ['question' => 'Adverb of frequency example', 'answer' => 'Always, usually, often, sometimes, rarely, never'],
                    ['question' => 'Where does an adverb of manner go?', 'answer' => 'After the verb or before the verb'],
                ]),
            ],
            [
                'grammars_id' => 8,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Countable or uncountable: water', 'answer' => 'Uncountable'],
                    ['question' => 'Countable or uncountable: books', 'answer' => 'Countable'],
                    ['question' => 'Plural of "child"', 'answer' => 'Children'],
                    ['question' => 'Collective noun for "ships"', 'answer' => 'Fleet'],
                    ['question' => '"Information" is ___', 'answer' => 'Uncountable (not informations)'],
                ]),
            ],
            [
                'grammars_id' => 9,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Past tense of "write"', 'answer' => 'Wrote'],
                    ['question' => 'Present participle of "swim"', 'answer' => 'Swimming'],
                    ['question' => '"Will" is a ___ verb', 'answer' => 'Modal auxiliary'],
                    ['question' => 'Regular verb example', 'answer' => 'Walk - walked - walked'],
                    ['question' => 'Third form of "eat"', 'answer' => 'Eaten'],
                ]),
            ],
            [
                'grammars_id' => 10,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does adjective describe?', 'answer' => 'Noun (She is tall. / A big house)'],
                    ['question' => 'Comparative form of "good"', 'answer' => 'Better'],
                    ['question' => '"More beautiful" is ___ degree', 'answer' => 'Comparative (or superlative depending on context)'],
                    ['question' => 'Superlative of "big"', 'answer' => 'Biggest'],
                    ['question' => 'Order: __ red big house', 'answer' => 'A (Size - Opinion - Color)'],
                ]),
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasGrammar::create($tugas);
        }
    }
}
