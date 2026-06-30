<?php

namespace Database\Seeders;

use App\Models\TugasKosakata;
use Illuminate\Database\Seeder;

class TugasKosakataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tugass = [
            [
                'kosakatas_id' => 1,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "bangun tidur" in English?', 'answer' => 'Wake up'],
                    ['question' => 'Translate: "Makan pagi"', 'answer' => 'Breakfast'],
                    ['question' => 'What do you do in the bathroom?', 'answer' => 'Take a shower / Brush teeth'],
                    ['question' => '"Berkantor" in English', 'answer' => 'Go to the office / Commute'],
                    ['question' => 'What is "tidur" in English?', 'answer' => 'Sleep'],
                ]),
            ],
            [
                'kosakatas_id' => 2,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "makanan" in English?', 'answer' => 'Food'],
                    ['question' => 'Translate: "Minuman dingin"', 'answer' => 'Cold drink'],
                    ['question' => 'What do you call the morning meal?', 'answer' => 'Breakfast'],
                    ['question' => '"Sayuran" in English', 'answer' => 'Vegetables'],
                    ['question' => 'What is a "roti"?', 'answer' => 'Bread'],
                ]),
            ],
            [
                'kosakatas_id' => 3,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'Where do planes land?', 'answer' => 'Airport'],
                    ['question' => 'Translate: "Tiket perjalanan"', 'answer' => 'Travel ticket / Ticket'],
                    ['question' => 'What document do you need to travel abroad?', 'answer' => 'Passport'],
                    ['question' => '"Hotel" in English', 'answer' => 'Hotel'],
                    ['question' => 'What is "koper"?', 'answer' => 'Suitcase / Luggage'],
                ]),
            ],
            [
                'kosakatas_id' => 4,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "sakit kepala"?', 'answer' => 'Headache'],
                    ['question' => 'Translate: "Demam"', 'answer' => 'Fever'],
                    ['question' => 'What is the doctor who treats you?', 'answer' => 'Doctor / Physician'],
                    ['question' => '"Apotek" in English', 'answer' => 'Pharmacy / Drugstore'],
                    ['question' => 'What is "obat"?', 'answer' => 'Medicine / Medicine'],
                ]),
            ],
            [
                'kosakatas_id' => 5,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "ponsel"?', 'answer' => 'Smartphone / Mobile phone'],
                    ['question' => 'Translate: "Komputer"', 'answer' => 'Computer'],
                    ['question' => 'What is "internet"?', 'answer' => 'Internet'],
                    ['question' => 'What do you use to send email?', 'answer' => 'Computer / Laptop / Smartphone'],
                    ['question' => '"Website" in English', 'answer' => 'Website'],
                ]),
            ],
            [
                'kosakatas_id' => 6,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "sekolah"?', 'answer' => 'School'],
                    ['question' => 'Translate: "Guru"', 'answer' => 'Teacher'],
                    ['question' => 'What is the person who studies called?', 'answer' => 'Student'],
                    ['question' => '"Buku" in English', 'answer' => 'Book'],
                    ['question' => 'What do you write with?', 'answer' => 'Pen / Pencil'],
                ]),
            ],
            [
                'kosakatas_id' => 7,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "gunung"?', 'answer' => 'Mountain'],
                    ['question' => 'Translate: "Sungai"', 'answer' => 'River'],
                    ['question' => 'What is "pohon"?', 'answer' => 'Tree'],
                    ['question' => '"Laut" in English', 'answer' => 'Sea / Ocean'],
                    ['question' => 'What is the opposite of "wet"?', 'answer' => 'Dry'],
                ]),
            ],
            [
                'kosakatas_id' => 8,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "belanja"?', 'answer' => 'Shopping'],
                    ['question' => 'Translate: "Toko"', 'answer' => 'Store / Shop'],
                    ['question' => 'Where do you try clothes?', 'answer' => 'Fitting room / Dressing room'],
                    ['question' => '"Harga" in English', 'answer' => 'Price'],
                    ['question' => 'What do you pay with?', 'answer' => 'Money / Cash / Card'],
                ]),
            ],
            [
                'kosakatas_id' => 9,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "pekerjaan"?', 'answer' => 'Job / Work'],
                    ['question' => 'Translate: "Kantor"', 'answer' => 'Office'],
                    ['question' => 'Who do you work for?', 'answer' => 'Employer / Boss'],
                    ['question' => '"Gaji" in English', 'answer' => 'Salary / Wage'],
                    ['question' => 'What is "wawancara"?', 'answer' => 'Interview'],
                ]),
            ],
            [
                'kosakatas_id' => 10,
                'kkm' => '70',
                'body_questions' => json_encode([
                    ['question' => 'What is "senang"?', 'answer' => 'Happy / Glad'],
                    ['question' => 'Translate: "Sedih"', 'answer' => 'Sad'],
                    ['question' => 'What is "marah"?', 'answer' => 'Angry'],
                    ['question' => '"Takut" in English', 'answer' => 'Afraid / Scared'],
                    ['question' => 'What emotion means "very happy"?', 'answer' => 'Excited / Ecstatic / Thrilled'],
                ]),
            ],
        ];

        foreach ($tugass as $tugas) {
            TugasKosakata::create($tugas);
        }
    }
}
