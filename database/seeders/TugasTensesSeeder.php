<?php

namespace Database\Seeders;

use App\Models\TugasTense;
use Illuminate\Database\Seeder;

class TugasTensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Foreign key: tenses_id -> detail_tenses (DetailTense)
     */
    public function run(): void
    {
        $tugass = [
            [
                'tenses_id' => 1,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: She ___ English every day.', 'answer' => 'studies'],
                    ['question' => 'Negative: I ___ coffee. (not drink)', 'answer' => 'do not drink / dont drink'],
                    ['question' => 'Question: ___ you ___ to music?', 'answer' => 'Do, listen'],
                    ['question' => 'Fill: He always ___ on time. (be)', 'answer' => 'is'],
                    ['question' => 'Present Simple signal words', 'answer' => 'Every day, always, usually, often, sometimes, never'],
                ]),
            ],
            [
                'tenses_id' => 2,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: Look! She ___ now. (sing)', 'answer' => 'is singing'],
                    ['question' => 'Make negative: They are playing now.', 'answer' => 'They are not (arent) playing now.'],
                    ['question' => 'Question form: ___ you ___ something? (eat)', 'answer' => 'Are, eating'],
                    ['question' => 'Fill: Right now, I ___ my homework. (do)', 'answer' => 'am doing'],
                    ['question' => 'Present Continuous signal words', 'answer' => 'Now, right now, at the moment, currently, at present'],
                ]),
            ],
            [
                'tenses_id' => 3,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: She ___ to Bali last week. (go)', 'answer' => 'went'],
                    ['question' => 'Negative: They ___ the movie. (not watch)', 'answer' => 'did not watch / didnt watch'],
                    ['question' => 'Question: ___ you ___ her yesterday?', 'answer' => 'Did, see'],
                    ['question' => 'Past Simple of "eat"', 'answer' => 'Ate'],
                    ['question' => 'Past Simple signal words', 'answer' => 'Yesterday, last week, ago, in 2020, last night'],
                ]),
            ],
            [
                'tenses_id' => 4,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: While I ___ TV, he called. (watch)', 'answer' => 'was watching'],
                    ['question' => 'Negative: She ___ when I arrived. (sleep)', 'answer' => 'was not sleeping / wasnt sleeping'],
                    ['question' => 'Past Continuous is used for ___ actions', 'answer' => 'Ongoing / interrupted actions in the past'],
                    ['question' => 'Fill: They ___ all day yesterday. (study)', 'answer' => 'were studying'],
                    ['question' => 'Signal words for Past Continuous', 'answer' => 'While, when, as, all day yesterday'],
                ]),
            ],
            [
                'tenses_id' => 5,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: I have ___ this book. (read)', 'answer' => 'read'],
                    ['question' => 'Negative: She has not ___ yet. (arrive)', 'answer' => 'arrived'],
                    ['question' => 'Question: ___ you ever ___ to London?', 'answer' => 'Have, been'],
                    ['question' => 'Present Perfect shows connection to ___', 'answer' => 'Present (current relevance)'],
                    ['question' => 'Present Perfect signal words', 'answer' => 'Already, yet, just, ever, never, for, since'],
                ]),
            ],
            [
                'tenses_id' => 6,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: She has ___ for 2 hours. (wait)', 'answer' => 'been waiting'],
                    ['question' => 'Present Perfect Continuous shows ___ of action', 'answer' => 'Duration / continuity'],
                    ['question' => 'Fill: I ___ all morning. (study)', 'answer' => 'have been studying'],
                    ['question' => 'Signal words for Present Perfect Continuous', 'answer' => 'For, since, all day, all morning, lately'],
                    ['question' => 'Use ___ or ___ with this tense', 'answer' => 'For (duration) / Since (starting point)'],
                ]),
            ],
            [
                'tenses_id' => 7,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: By the time I arrived, she ___ already ___. (leave)', 'answer' => 'had already left'],
                    ['question' => 'Past Perfect is used for ___ past action', 'answer' => 'Action before another past action'],
                    ['question' => 'Negative: He had not ___ the test. (pass)', 'answer' => 'passed'],
                    ['question' => 'Signal word for Past Perfect', 'answer' => 'By the time, before, after, already, just'],
                    ['question' => '"Had" is used with ___ subject', 'answer' => 'All subjects (I, you, he, she, it, we, they)'],
                ]),
            ],
            [
                'tenses_id' => 8,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: I will ___ the exam tomorrow. (take)', 'answer' => 'take'],
                    ['question' => 'Negative: It ___ tomorrow. (not rain)', 'answer' => 'will not rain / wont rain'],
                    ['question' => 'Question: ___ you ___ me? (help)', 'answer' => 'Will, help'],
                    ['question' => 'Future Simple uses ___ or shall', 'answer' => 'Will'],
                    ['question' => 'Future Simple signal words', 'answer' => 'Tomorrow, next week, in the future, soon, later'],
                ]),
            ],
            [
                'tenses_id' => 9,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: At this time tomorrow, I ___ flying. (be)', 'answer' => 'will be'],
                    ['question' => 'Future Continuous shows action that is ___ happening', 'answer' => 'Still / ongoing at a future time'],
                    ['question' => 'Fill: This time next week, they ___ in Paris. (stay)', 'answer' => 'will be staying'],
                    ['question' => 'Use Future Continuous for ___ future actions', 'answer' => 'Predicted / expected'],
                    ['question' => 'Structure: will + be + ___', 'answer' => 'Verb-ing'],
                ]),
            ],
            [
                'tenses_id' => 10,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Complete: By next year, I ___ here for 5 years. (work)', 'answer' => 'will have worked'],
                    ['question' => 'Future Perfect shows action completed ___ a future time', 'answer' => 'Before'],
                    ['question' => 'Fill: She will have graduated ___ June. (by)', 'answer' => 'by'],
                    ['question' => 'Signal word for Future Perfect', 'answer' => 'By the time, by, before, already'],
                    ['question' => 'Structure: will have + ___', 'answer' => 'Past participle (V3)'],
                ]),
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasTense::create($tugas);
        }
    }
}
