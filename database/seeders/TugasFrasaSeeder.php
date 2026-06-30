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
                'body_questions' => json_encode([
                    ['question' => 'How to greet someone in the morning?', 'answer' => 'Good morning!'],
                    ['question' => 'What do you say when meeting someone for the first time?', 'answer' => 'Nice to meet you!'],
                    ['question' => 'How to ask "Apa kabar?"', 'answer' => 'How are you? / How are you doing?'],
                    ['question' => 'What is "Halo"?', 'answer' => 'Hello / Hi'],
                    ['question' => 'How to end a conversation briefly?', 'answer' => 'See you later! / Bye!'],
                ]),
            ],
            [
                'frasa_id' => 2,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Polite way to ask for something', 'answer' => 'Could you please...? / Can I have...?'],
                    ['question' => 'How to ask someone to open the door?', 'answer' => 'Could you please open the door?'],
                    ['question' => 'What phrase means "Boleh saya...?"', 'answer' => 'May I...? / Could I...?'],
                    ['question' => 'How to politely request help?', 'answer' => 'Could you help me, please?'],
                    ['question' => 'Ask for the salt politely', 'answer' => 'Could you please pass the salt?'],
                ]),
            ],
            [
                'frasa_id' => 3,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to express your opinion?', 'answer' => 'In my opinion... / I think... / I believe...'],
                    ['question' => 'What phrase means "Menurut saya"?', 'answer' => 'In my opinion... / As far as I know...'],
                    ['question' => 'Express agreement with an opinion', 'answer' => 'I agree with you. / You are right.'],
                    ['question' => 'How to politely disagree?', 'answer' => 'I see your point, but... / I dont think so.'],
                    ['question' => 'What phrase means "Saya yakin"?', 'answer' => 'I am sure... / I am confident...'],
                ]),
            ],
            [
                'frasa_id' => 4,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to give advice?', 'answer' => 'You should... / I recommend... / Why dont you...?'],
                    ['question' => 'What phrase means "Kamu seharusnya"?', 'answer' => 'You should...'],
                    ['question' => 'Give advice to study harder', 'answer' => 'You should study harder. / I advise you to study more.'],
                    ['question' => 'How to suggest something?', 'answer' => 'How about...? / What about...? / Lets...'],
                    ['question' => 'Strong advice phrase', 'answer' => 'You must... / You have to...'],
                ]),
            ],
            [
                'frasa_id' => 5,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to apologize?', 'answer' => 'I am sorry. / I apologize. / Sorry for...'],
                    ['question' => 'Formal apology phrase', 'answer' => 'I sincerely apologize for... / Please accept my apology.'],
                    ['question' => 'Apologize for being late', 'answer' => 'I am sorry for being late. / Sorry, I am late.'],
                    ['question' => 'How to say "Maaf打扰"?', 'answer' => 'Excuse me. / I am sorry to interrupt.'],
                    ['question' => 'Casual apology expression', 'answer' => 'Oops, my bad! / My apologies!'],
                ]),
            ],
            [
                'frasa_id' => 6,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to ask for help?', 'answer' => 'Can you help me? / Could you help me?'],
                    ['question' => 'What phrase means "Tolong bantu saya"?', 'answer' => 'Please help me. / I need your help.'],
                    ['question' => 'Ask for help carrying something', 'answer' => 'Could you help me carry this?'],
                    ['question' => 'Polite way to ask for assistance', 'answer' => 'Would you mind helping me?'],
                    ['question' => 'How to ask "Bisa dijelaskan?"', 'answer' => 'Could you explain it? / Can you explain?'],
                ]),
            ],
            [
                'frasa_id' => 7,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to agree with someone?', 'answer' => 'I agree. / You are right. / Exactly!'],
                    ['question' => 'How to disagree politely?', 'answer' => 'I see your point, but... / I am not sure about that.'],
                    ['question' => 'Strong agreement phrase', 'answer' => 'I completely agree. / Absolutely! / Definitely!'],
                    ['question' => 'Partial agreement expression', 'answer' => 'I agree partly, but...'],
                    ['question' => 'How to say "Saya tidak setuju"?', 'answer' => 'I disagree. / I dont agree.'],
                ]),
            ],
            [
                'frasa_id' => 8,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to start a conversation with a stranger?', 'answer' => 'Excuse me, do you have a moment?'],
                    ['question' => 'Opening phrase for small talk', 'answer' => 'Nice weather today, isnt it?'],
                    ['question' => 'How to introduce yourself?', 'answer' => 'Hello, my name is... / Nice to meet you.'],
                    ['question' => 'Ask someone if they are busy', 'answer' => 'Do you have a minute? / Are you free now?'],
                    ['question' => 'How to join a group conversation?', 'answer' => 'May I join you? / Do you mind if I join?'],
                ]),
            ],
            [
                'frasa_id' => 9,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to end a conversation politely?', 'answer' => 'It was nice talking to you. / I have to go now.'],
                    ['question' => 'Say goodbye to a friend', 'answer' => 'See you later! / Take care! / Bye!'],
                    ['question' => 'Formal way to end a meeting', 'answer' => 'Thank you for your time. / It was nice meeting you.'],
                    ['question' => 'Apologize for ending the conversation', 'answer' => 'Sorry, I really have to go now.'],
                    ['question' => 'Promise to meet again', 'answer' => 'Lets meet again soon. / See you tomorrow!'],
                ]),
            ],
            [
                'frasa_id' => 10,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'How to answer a phone?', 'answer' => 'Hello? / Good morning/afternoon.'],
                    ['question' => 'How to ask for someone on the phone?', 'answer' => 'May I speak to...? / Is ... available?'],
                    ['question' => 'Ask the caller to wait', 'answer' => 'Please hold on. / Hold on a moment.'],
                    ['question' => 'How to take a message?', 'answer' => 'May I take a message? / Can I leave a message?'],
                    ['question' => 'End a phone call politely', 'answer' => 'Thank you for calling. / Goodbye.'],
                ]),
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasFrasa::create($tugas);
        }
    }
}
