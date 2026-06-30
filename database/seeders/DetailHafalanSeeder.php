<?php

namespace Database\Seeders;

use App\Models\DetailHafalan;
use Illuminate\Database\Seeder;

class DetailHafalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [
            // Daily Greetings (hafalan_id = 1)
            ['hafalan_id' => 1, 'name' => 'Good Morning', 'description' => 'Sapaan untuk pagi hari'],
            ['hafalan_id' => 1, 'name' => 'Good Afternoon', 'description' => 'Sapaan untuk siang hari'],
            ['hafalan_id' => 1, 'name' => 'Good Evening', 'description' => 'Sapaan untuk sore/malam hari'],
            // Numbers 1-100 (hafalan_id = 2)
            ['hafalan_id' => 2, 'name' => 'One to Ten', 'description' => 'Angka 1 sampai 10'],
            ['hafalan_id' => 2, 'name' => 'Eleven to Twenty', 'description' => 'Angka 11 sampai 20'],
            // Days and Months (hafalan_id = 3)
            ['hafalan_id' => 3, 'name' => 'Days of the Week', 'description' => 'Nama-nama hari dalam seminggu'],
            ['hafalan_id' => 3, 'name' => 'Months of the Year', 'description' => 'Nama-nama bulan dalam setahun'],
            // Common Verbs (hafalan_id = 4)
            ['hafalan_id' => 4, 'name' => 'Action Verbs', 'description' => 'Kata kerja aktif'],
            ['hafalan_id' => 4, 'name' => 'Helping Verbs', 'description' => 'Kata kerja bantu'],
            // Adjectives (hafalan_id = 5)
            ['hafalan_id' => 5, 'name' => 'Size Adjectives', 'description' => 'Kata sifat ukuran'],
        ];

        foreach ($details as $detail) {
            DetailHafalan::create($detail);
        }
    }
}
