<?php

namespace Database\Seeders;

use App\Models\Tense;
use Illuminate\Database\Seeder;

class TensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenses = [
            [
                'category_id' => 3,
                'name' => 'Present Simple Tense',
                'images' => 'images/tenses/present-simple.png',
                'description' => 'Digunakan untuk kebiasaan sehari-hari, fakta umum, dan kejadian yang berulang',
            ],
            [
                'category_id' => 3,
                'name' => 'Present Continuous Tense',
                'images' => 'images/tenses/present-continuous.png',
                'description' => 'Digunakan untuk aktivitas yang sedang happening sekarang',
            ],
            [
                'category_id' => 3,
                'name' => 'Past Simple Tense',
                'images' => 'images/tenses/past-simple.png',
                'description' => 'Digunakan untuk kejadian yang happened di masa lalu',
            ],
            [
                'category_id' => 3,
                'name' => 'Past Continuous Tense',
                'images' => 'images/tenses/past-continuous.png',
                'description' => 'Digunakan untuk aktivitas yang sedang happening di masa lalu',
            ],
            [
                'category_id' => 3,
                'name' => 'Present Perfect Tense',
                'images' => 'images/tenses/present-perfect.png',
                'description' => 'Digunakan untuk kejadian yang berhubungan dengan masa kini',
            ],
            [
                'category_id' => 3,
                'name' => 'Present Perfect Continuous',
                'images' => 'images/tenses/present-perfect-continuous.png',
                'description' => 'Digunakan untuk aktivitas yang happened dari masa lalu hingga sekarang',
            ],
            [
                'category_id' => 3,
                'name' => 'Past Perfect Tense',
                'images' => 'images/tenses/past-perfect.png',
                'description' => 'Digunakan untuk kejadian yang happened sebelum kejadian lain di masa lalu',
            ],
            [
                'category_id' => 3,
                'name' => 'Future Simple Tense',
                'images' => 'images/tenses/future-simple.png',
                'description' => 'Digunakan untuk kejadian yang akan terjadi di masa depan',
            ],
            [
                'category_id' => 3,
                'name' => 'Future Continuous Tense',
                'images' => 'images/tenses/future-continuous.png',
                'description' => 'Digunakan untuk aktivitas yang akan sedang happening di masa depan',
            ],
            [
                'category_id' => 3,
                'name' => 'Future Perfect Tense',
                'images' => 'images/tenses/future-perfect.png',
                'description' => 'Digunakan untuk kejadian yang akan selesai sebelum waktu tertentu di masa depan',
            ],
        ];

        foreach ($tenses as $tense) {
            Tense::create($tense);
        }
    }
}
