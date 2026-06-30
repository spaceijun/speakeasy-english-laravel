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
                'body_questions' => json_encode([
                    ['question' => 'Translate: "Good morning, how are you?"', 'answer' => 'Selamat pagi, apa kabar?'],
                    ['question' => 'Translate: "Nice to meet you!"', 'answer' => 'Senang bertemu denganmu!'],
                    ['question' => 'What is the greeting for afternoon?', 'answer' => 'Good afternoon'],
                    ['question' => 'How to say "Selamat malam" in English?', 'answer' => 'Good evening / Good night'],
                    ['question' => 'Translate: "See you later!"', 'answer' => 'Sampai jumpa nanti!'],
                ]),
            ],
            [
                'hafalan_id' => 2,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What comes after 15?', 'answer' => 'Sixteen'],
                    ['question' => 'Spell the number 100', 'answer' => 'One hundred'],
                    ['question' => 'What is the number 50 in words?', 'answer' => 'Fifty'],
                    ['question' => 'How do you write 21?', 'answer' => 'Twenty-one'],
                    ['question' => 'What number is XL in Roman numerals?', 'answer' => 'Forty'],
                ]),
            ],
            [
                'hafalan_id' => 3,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is the first day of the week?', 'answer' => 'Sunday'],
                    ['question' => 'Which month has 28/29 days?', 'answer' => 'February'],
                    ['question' => 'How many months in a year?', 'answer' => 'Twelve'],
                    ['question' => 'What day comes after Thursday?', 'answer' => 'Friday'],
                    ['question' => 'Which month is the 6th month?', 'answer' => 'June'],
                ]),
            ],
            [
                'hafalan_id' => 4,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is the past tense of "go"?', 'answer' => 'Went'],
                    ['question' => 'What is the verb for "to eat"?', 'answer' => 'Eat'],
                    ['question' => 'What does "run" mean?', 'answer' => 'Lari'],
                    ['question' => 'Give 3 common verbs', 'answer' => 'Go, eat, sleep, walk, talk, etc.'],
                    ['question' => 'What is the present participle of "swim"?', 'answer' => 'Swimming'],
                ]),
            ],
            [
                'hafalan_id' => 5,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is the opposite of "big"?', 'answer' => 'Small'],
                    ['question' => 'What does "beautiful" mean?', 'answer' => 'Cantik / Indah'],
                    ['question' => 'Give 3 adjectives for size', 'answer' => 'Big, small, medium, large, tiny, huge'],
                    ['question' => 'What is the adjective for "hot"?', 'answer' => 'Hot'],
                    ['question' => 'Give an adjective meaning "very happy"', 'answer' => 'Ecstatic, delighted, thrilled'],
                ]),
            ],
            [
                'hafalan_id' => 6,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "on" used for?', 'answer' => 'Surface (on the table)'],
                    ['question' => 'What is "in" used for?', 'answer' => 'Inside (in the room)'],
                    ['question' => 'What is "at" used for?', 'answer' => 'Specific point (at school)'],
                    ['question' => 'Give a sentence using "under"', 'answer' => 'The cat is under the table.'],
                    ['question' => 'What preposition means "beside"?', 'answer' => 'Next to / beside'],
                ]),
            ],
            [
                'hafalan_id' => 7,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is the question word for "tempat"?', 'answer' => 'Where'],
                    ['question' => 'What is the question word for "waktu"?', 'answer' => 'When'],
                    ['question' => 'How do you ask "mengapa"?', 'answer' => 'Why'],
                    ['question' => 'What is "how much" used for?', 'answer' => 'Uncountable things'],
                    ['question' => 'Give a sentence with "who"', 'answer' => 'Who is your teacher?'],
                ]),
            ],
            [
                'hafalan_id' => 8,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "every day" mean?', 'answer' => 'Setiap hari'],
                    ['question' => 'How to say "nanti malam" in English?', 'answer' => 'Tonight / Tomorrow night'],
                    ['question' => 'What does "last week" mean?', 'answer' => 'Minggu lalu'],
                    ['question' => 'Give a time expression for past', 'answer' => 'Yesterday, last week, ago'],
                    ['question' => 'What is "nanti" in English?', 'answer' => 'Later / Soon'],
                ]),
            ],
            [
                'hafalan_id' => 9,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What color is the sky?', 'answer' => 'Blue'],
                    ['question' => 'How do you say "merah" in English?', 'answer' => 'Red'],
                    ['question' => 'What is the color of grass?', 'answer' => 'Green'],
                    ['question' => 'Give 5 color names', 'answer' => 'Red, blue, green, yellow, orange, purple, etc.'],
                    ['question' => 'What color is the sun?', 'answer' => 'Yellow'],
                ]),
            ],
            [
                'hafalan_id' => 10,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "father" in English?', 'answer' => 'Father / Dad'],
                    ['question' => 'How do you say "saudara perempuan"?', 'answer' => 'Sister'],
                    ['question' => 'What is "grandmother"?', 'answer' => 'Nenek (dari ibu/bapak)'],
                    ['question' => 'Give 3 family members', 'answer' => 'Mother, father, sister, brother, uncle, aunt'],
                    ['question' => 'What is the opposite of "brother"?', 'answer' => 'Sister'],
                ]),
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasHafalan::create($tugas);
        }
    }
}
