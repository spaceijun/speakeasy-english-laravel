<?php

namespace Database\Seeders;

use App\Models\DetailTense;
use Illuminate\Database\Seeder;

class DetailTensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [
            // Present Simple
            [
                'name' => 'Present Simple - Positive',
                'images' => 'images/detail-tenses/ps-positive.png',
                'description' => 'Rumus: Subject + Verb(s)'
            ],
            [
                'name' => 'Present Simple - Negative',
                'images' => 'images/detail-tenses/ps-negative.png',
                'description' => 'Rumus: Subject + do not + Verb(base)'
            ],
            [
                'name' => 'Present Simple - Question',
                'images' => 'images/detail-tenses/ps-question.png',
                'description' => 'Rumus: Do + Subject + Verb(base)?'
            ],
            // Past Simple
            [
                'name' => 'Past Simple - Positive',
                'images' => 'images/detail-tenses/pst-positive.png',
                'description' => 'Rumus: Subject + Verb(ed/irregular)'
            ],
            [
                'name' => 'Past Simple - Negative',
                'images' => 'images/detail-tenses/pst-negative.png',
                'description' => 'Rumus: Subject + did not + Verb(base)'
            ],
            [
                'name' => 'Past Simple - Question',
                'images' => 'images/detail-tenses/pst-question.png',
                'description' => 'Rumus: Did + Subject + Verb(base)?'
            ],
            // Present Continuous
            [
                'name' => 'Present Continuous - Formula',
                'images' => 'images/detail-tenses/pc-formula.png',
                'description' => 'Rumus: Subject + am/is/are + Verb-ing'
            ],
            [
                'name' => 'Present Continuous - Usage',
                'images' => 'images/detail-tenses/pc-usage.png',
                'description' => 'Digunakan untuk aktivitas yang sedang terjadi'
            ],
            // Future Tense
            [
                'name' => 'Future Simple - Will',
                'images' => 'images/detail-tenses/fs-will.png',
                'description' => 'Rumus: Subject + will + Verb(base)'
            ],
            [
                'name' => 'Future Simple - Going to',
                'images' => 'images/detail-tenses/fs-going-to.png',
                'description' => 'Rumus: Subject + am/is/are + going to + Verb'
            ],
        ];

        foreach ($details as $detail) {
            DetailTense::create($detail);
        }
    }
}
