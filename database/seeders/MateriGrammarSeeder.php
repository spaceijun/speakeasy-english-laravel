<?php

namespace Database\Seeders;

use App\Models\MateriGrammar;
use Illuminate\Database\Seeder;

class MateriGrammarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Foreign key: detailgram_id -> detail_grammars (DetailGrammar)
     */
    public function run(): void
    {
        $materis = [
            // Basic Subject-Verb Rules (detailgram_id = 1)
            [
                'detailgram_id' => 1,
                'name' => 'Rule 1: Singular Subject',
                'description' => 'Jika subject singular, gunakan verb singular. Contoh: He walks to school every day.'
            ],
            [
                'detailgram_id' => 1,
                'name' => 'Rule 2: Plural Subject',
                'description' => 'Jika subject plural, gunakan verb plural. Contoh: They walk to school every day.'
            ],
            // Singular and Plural (detailgram_id = 2)
            [
                'detailgram_id' => 2,
                'name' => 'Regular Plurals',
                'description' => 'Tambahkan -s atau -es pada noun. Contoh: cat → cats, box → boxes'
            ],
            [
                'detailgram_id' => 2,
                'name' => 'Irregular Plurals',
                'description' => 'Ubah bentuk internal atau gunakan bentuk berbeda. Contoh: child → children, man → men'
            ],
            // Nouns and Pronouns (detailgram_id = 3)
            [
                'detailgram_id' => 3,
                'name' => 'Types of Nouns',
                'description' => 'Common noun, proper noun, countable noun, uncountable noun'
            ],
            [
                'detailgram_id' => 3,
                'name' => 'Pronoun Usage',
                'description' => 'I, you, he, she, it, we, they - subject pronouns; me, you, him, her, it, us, them - object pronouns'
            ],
            // Verbs and Adverbs (detailgram_id = 4)
            [
                'detailgram_id' => 4,
                'name' => 'Verb Tenses Overview',
                'description' => 'Verb berubah sesuai dengan tense yang digunakan'
            ],
            [
                'detailgram_id' => 4,
                'name' => 'Adverb Placement',
                'description' => 'Adverb biasanya ditempatkan setelah verb atau di awal kalimat untuk emphasis'
            ],
            // Simple Sentences (detailgram_id = 5)
            [
                'detailgram_id' => 5,
                'name' => 'S-V-O Pattern',
                'description' => 'Subject + Verb + Object. Contoh: She reads books.'
            ],
            [
                'detailgram_id' => 5,
                'name' => 'S-V-C Pattern',
                'description' => 'Subject + Verb + Complement. Contoh: She is a teacher.'
            ],
        ];

        foreach ($materis as $materi) {
            MateriGrammar::create($materi);
        }
    }
}
