<?php

namespace Database\Seeders;

use App\Models\MateriTense;
use Illuminate\Database\Seeder;

class MateriTensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materis = [
            // Present Simple (detail_tenses_id = 1, 2, 3)
            [
                'detail_tenses_id' => 1,
                'name' => 'Positive Form Examples',
                'description' => 'I work every day. / She works every day. / They play football on Sunday.'
            ],
            [
                'detail_tenses_id' => 2,
                'name' => 'Negative Form Examples',
                'description' => 'I do not (dont) work on Sunday. / She does not (doesnt) like coffee.'
            ],
            // Past Simple (detail_tenses_id = 4, 5, 6)
            [
                'detail_tenses_id' => 4,
                'name' => 'Regular Verbs',
                'description' => 'Verb + ed: walk → walked, play → played, study → studied'
            ],
            [
                'detail_tenses_id' => 4,
                'name' => 'Irregular Verbs',
                'description' => 'Bentuk khusus: go → went, eat → ate, see → saw, take → took'
            ],
            [
                'detail_tenses_id' => 5,
                'name' => 'Past Simple Negative',
                'description' => 'Subject + did not + Verb(base). Contoh: I did not (didnt) go to school yesterday.'
            ],
            [
                'detail_tenses_id' => 6,
                'name' => 'Past Simple Question',
                'description' => 'Did + Subject + Verb(base)? Contoh: Did you see the movie last night?'
            ],
            // Present Continuous (detail_tenses_id = 7, 8)
            [
                'detail_tenses_id' => 7,
                'name' => 'Structure and Formula',
                'description' => 'am/is/are + Verb-ing. Contoh: I am studying English now.'
            ],
            [
                'detail_tenses_id' => 7,
                'name' => 'Time Signals',
                'description' => 'now, right now, at the moment, currently, at present'
            ],
            // Future Tense (detail_tenses_id = 9, 10)
            [
                'detail_tenses_id' => 9,
                'name' => 'Will vs Going to',
                'description' => 'Will untuk keputusan spontaneously, going to untuk rencana yang sudah direncanakan'
            ],
            [
                'detail_tenses_id' => 10,
                'name' => 'Future Time Signals',
                'description' => 'tomorrow, next week, in the future, soon, later'
            ],
        ];

        foreach ($materis as $materi) {
            MateriTense::create($materi);
        }
    }
}
