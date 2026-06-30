<?php

namespace Database\Seeders;

use App\Models\DetailFrasa;
use Illuminate\Database\Seeder;

class DetailFrasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [
            // Greeting Phrases (frasa_id = 1)
            ['frasa_id' => 1, 'english' => 'Hello, how are you?', 'indonesian' => 'Halo, apa kabar?'],
            ['frasa_id' => 1, 'english' => 'Good morning!', 'indonesian' => 'Selamat pagi!'],
            ['frasa_id' => 1, 'english' => 'Nice to meet you!', 'indonesian' => 'Senang bertemu denganmu!'],
            // Making Requests (frasa_id = 2)
            ['frasa_id' => 2, 'english' => 'Could you please help me?', 'indonesian' => 'Bisakah kamu membantu saya?'],
            ['frasa_id' => 2, 'english' => 'Would you mind opening the window?', 'indonesian' => 'Apakah kamu介意 membuka jendela?'],
            // Expressing Opinions (frasa_id = 3)
            ['frasa_id' => 3, 'english' => 'In my opinion...', 'indonesian' => 'Menurut saya...'],
            ['frasa_id' => 3, 'english' => 'I believe that...', 'indonesian' => 'Saya percaya bahwa...'],
            // Giving Advice (frasa_id = 4)
            ['frasa_id' => 4, 'english' => 'You should try harder.', 'indonesian' => 'Kamu harus lebih努力.'],
            ['frasa_id' => 4, 'english' => 'I recommend you to read more.', 'indonesian' => 'Saya merekomendasikanmu untuk membaca lebih banyak.'],
            // Apologizing (frasa_id = 5)
            ['frasa_id' => 5, 'english' => 'I am sorry for being late.', 'indonesian' => 'Maaf karena terlambat.'],
        ];

        foreach ($details as $detail) {
            DetailFrasa::create($detail);
        }
    }
}
