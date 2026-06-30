<?php

namespace Database\Seeders;

use App\Models\Frasa;
use Illuminate\Database\Seeder;

class FrasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frasas = [
            [
                'category_id' => 5,
                'name' => 'Greeting Phrases',
                'description' => 'Frasa-frasa untuk menyapa orang',
            ],
            [
                'category_id' => 5,
                'name' => 'Making Requests',
                'description' => 'Frasa untuk membuat permintaan',
            ],
            [
                'category_id' => 5,
                'name' => 'Expressing Opinions',
                'description' => 'Frasa untuk mengungkapkan pendapat',
            ],
            [
                'category_id' => 5,
                'name' => 'Giving Advice',
                'description' => 'Frasa untuk memberi saran',
            ],
            [
                'category_id' => 5,
                'name' => 'Apologizing',
                'description' => 'Frasa untuk meminta maaf',
            ],
            [
                'category_id' => 5,
                'name' => 'Asking for Help',
                'description' => 'Frasa untuk meminta bantuan',
            ],
            [
                'category_id' => 5,
                'name' => 'Agreeing and Disagreeing',
                'description' => 'Frasa untuk setuju dan tidak setuju',
            ],
            [
                'category_id' => 5,
                'name' => 'Starting a Conversation',
                'description' => 'Frasa untuk memulai percakapan',
            ],
            [
                'category_id' => 5,
                'name' => 'Ending a Conversation',
                'description' => 'Frasa untuk mengakhiri percakapan',
            ],
            [
                'category_id' => 5,
                'name' => 'Phone Phrases',
                'description' => 'Frasa untuk berbicara lewat telepon',
            ],
        ];

        foreach ($frasas as $frasa) {
            Frasa::create($frasa);
        }
    }
}
