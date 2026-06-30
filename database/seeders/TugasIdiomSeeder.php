<?php

namespace Database\Seeders;

use App\Models\TugasIdiom;
use Illuminate\Database\Seeder;

class TugasIdiomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'idiom_id' => 1,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Let the cat out of the bag" mean?', 'answer' => 'Membocorkan rahasia'],
                    ['question' => 'What does "Beat around the bush" mean?', 'answer' => 'Berputar-putar tidak langsung ke inti'],
                    ['question' => 'Use "Piece of cake" in a sentence', 'answer' => 'That test was a piece of cake!'],
                    ['question' => 'What idiom means "sangat mudah"?', 'answer' => 'Piece of cake / A piece of cake'],
                    ['question' => 'Explain: "The early bird catches the worm"', 'answer' => 'Orang yang rajin akan успех / Werlebih awal lebih baik'],
                ]),
            ],
            [
                'idiom_id' => 2,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Break a leg!" mean?', 'answer' => 'Semoga berhasil!'],
                    ['question' => 'What does "Cost an arm and a leg" mean?', 'answer' => 'Sangat mahal'],
                    ['question' => 'Use "Give someone a hand"', 'answer' => 'Please give him a hand!'],
                    ['question' => 'What does "Head over heels" mean?', 'answer' => 'Semakin dalam jatuh cinta / Jatuh cinta dalam-dalam'],
                    ['question' => 'Explain: "Keep your chin up"', 'answer' => 'Tetap semangat / Jangan menyerah'],
                ]),
            ],
            [
                'idiom_id' => 3,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Once in a blue moon" mean?', 'answer' => 'Jarang sekali'],
                    ['question' => 'What does "Green with envy" mean?', 'answer' => 'Irí hati / Ingin memiliki'],
                    ['question' => 'Use "White lie" in a sentence', 'answer' => 'It was just a white lie to protect her feelings.'],
                    ['question' => 'What does "In the red" mean?', 'answer' => 'Bangkrut / Rugi / Dalam keadaan deficit'],
                    ['question' => 'Explain: "Black and white" (certainty)', 'answer' => 'Hitam putih / Sangat jelas / Pasti'],
                ]),
            ],
            [
                'idiom_id' => 4,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Piece of cake" mean?', 'answer' => 'Sangat mudah'],
                    ['question' => 'What does "Spill the beans" mean?', 'answer' => 'Membocorkan rahasia'],
                    ['question' => 'Use "Bring home the bacon"', 'answer' => 'He works hard to bring home the bacon.'],
                    ['question' => 'What does "In a nutshell" mean?', 'answer' => 'Singkatnya / Dalam ringkasan'],
                    ['question' => 'Explain: "Its a piece of cake"', 'answer' => 'Itu sangat mudah'],
                ]),
            ],
            [
                'idiom_id' => 5,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Under the weather" mean?', 'answer' => 'Merasa tidak enak badan / Sedang sakit'],
                    ['question' => 'What does "Storm in a teacup" mean?', 'answer' => 'Masalah kecil yang dibesar-besarkan'],
                    ['question' => 'Use "Every cloud has a silver lining"', 'answer' => 'Every cloud has a silver lining, so stay positive.'],
                    ['question' => 'What does "Rain on someones parade" mean?', 'answer' => 'Merusak rencana seseorang'],
                    ['question' => 'Explain: "When it rains, it pours"', 'answer' => 'Nasib buruk tidak datang sendiri / Dari satu masalah ke masalah lain'],
                ]),
            ],
            [
                'idiom_id' => 6,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Break the bank" mean?', 'answer' => 'Menghabiskan semua uang'],
                    ['question' => 'What does "In the black" mean?', 'answer' => 'Untung / Dalam keadaan positif'],
                    ['question' => 'Use "Cost a fortune"', 'answer' => 'That bag cost a fortune!'],
                    ['question' => 'What does "Save for a rainy day" mean?', 'answer' => 'Menabung untuk masa depan'],
                    ['question' => 'Explain: "Money doesnt grow on trees"', 'answer' => 'Uang tidak mudah didapat / Harus bekerja keras untuk uang'],
                ]),
            ],
            [
                'idiom_id' => 7,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Around the clock" mean?', 'answer' => 'Sepanjang waktu / Tanpa berhenti'],
                    ['question' => 'What does "Time flies" mean?', 'answer' => 'Waktu berlalu begitu cepat'],
                    ['question' => 'Use "The time of my life"', 'answer' => 'I had the time of my life at the party.'],
                    ['question' => 'What does "Kill time" mean?', 'answer' => 'Mengisi waktu luang'],
                    ['question' => 'Explain: "Better late than never"', 'answer' => 'lebih baik terlambat daripada tidak sama sekali'],
                ]),
            ],
            [
                'idiom_id' => 8,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Go to pot" mean?', 'answer' => 'Menjadi buruk / Gagal'],
                    ['question' => 'What does "Be in full bloom" mean?', 'answer' => 'Mekar sempurna / Sedang puncak'],
                    ['question' => 'Use "The tip of the iceberg"', 'answer' => 'That is only the tip of the iceberg.'],
                    ['question' => 'What does "Come rain or shine" mean?', 'answer' => 'Tidak peduli apa pun / Dalam kondisi apa pun'],
                    ['question' => 'Explain: "Barking up the wrong tree"', 'answer' => 'Salah sasaran / Salah alamat'],
                ]),
            ],
            [
                'idiom_id' => 9,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Over the moon" mean?', 'answer' => 'Sangat bahagia'],
                    ['question' => 'What does "On cloud nine" mean?', 'answer' => 'Sangat bahagia / Di awan-awan'],
                    ['question' => 'Use "In the same boat"', 'answer' => 'We are all in the same boat now.'],
                    ['question' => 'What does "Bite the bullet" mean?', 'answer' => 'Menghadapi masalah dengan berani'],
                    ['question' => 'Explain: "A weight off my shoulders"', 'answer' => 'Beban yang terlepas / Lega'],
                ]),
            ],
            [
                'idiom_id' => 10,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What does "Get down to business" mean?', 'answer' => 'Mulai bekerja / Fokus pada pekerjaan'],
                    ['question' => 'What does "Cut corners" mean?', 'answer' => 'Mengerjakan dengan cara termudah / Menghemat biaya'],
                    ['question' => 'Use "Learn the ropes"', 'answer' => 'She is still learning the ropes.'],
                    ['question' => 'What does "On the ball" mean?', 'answer' => 'Betah珠子 / Cepat mengerti'],
                    ['question' => 'Explain: "Think outside the box"', 'answer' => 'Berpikir kreatif / Di luar kebiasaan'],
                ]),
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasIdiom::create($tugas);
        }
    }
}
