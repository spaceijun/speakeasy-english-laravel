<?php

namespace Database\Seeders;

use App\Models\DetailIdiom;
use Illuminate\Database\Seeder;

class DetailIdiomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [
            // Animal Idioms (idiom_id = 1)
            ['idiom_id' => 1, 'english' => 'Let the cat out of the bag', 'indonesia' => 'Membocorkan rahasia'],
            ['idiom_id' => 1, 'english' => 'Beat around the bush', 'indonesia' => 'Berputar-putar tidak langsung ke inti'],
            // Body Part Idioms (idiom_id = 2)
            ['idiom_id' => 2, 'english' => 'Break a leg!', 'indonesia' => 'Semoga berhasil!'],
            ['idiom_id' => 2, 'english' => 'Cost an arm and a leg', 'indonesia' => 'Sangat mahal'],
            // Color Idioms (idiom_id = 3)
            ['idiom_id' => 3, 'english' => 'Once in a blue moon', 'indonesia' => 'Jarang sekali'],
            ['idiom_id' => 3, 'english' => 'Green with envy', 'indonesia' => 'Irí hati'],
            // Food Idioms (idiom_id = 4)
            ['idiom_id' => 4, 'english' => 'Piece of cake', 'indonesia' => 'Sangat mudah'],
            ['idiom_id' => 4, 'english' => 'Spill the beans', 'indonesia' => 'Membocorkan rahasia'],
            // Weather Idioms (idiom_id = 5)
            ['idiom_id' => 5, 'english' => 'Under the weather', 'indonesia' => 'Merasa tidak enak badan'],
            ['idiom_id' => 5, 'english' => 'Storm in a teacup', 'indonesia' => 'Masalah kecil yang dibesar-besarkan'],
        ];

        foreach ($details as $detail) {
            DetailIdiom::create($detail);
        }
    }
}
