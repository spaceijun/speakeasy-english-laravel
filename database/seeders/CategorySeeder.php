<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Vocabulary',
                'images' => 'images/category/vocabulary.png',
                'description' => 'Pelajari kosakata bahasa Inggris untuk memperkaya vocabulary kamu',
            ],
            [
                'name' => 'Grammar',
                'images' => 'images/category/grammar.png',
                'description' => 'Kuasai struktur kalimat dan tata bahasa Inggris yang benar',
            ],
            [
                'name' => 'Tenses',
                'images' => 'images/category/tenses.png',
                'description' => 'Pahami berbagai bentuk tense dalam bahasa Inggris',
            ],
            [
                'name' => 'Idiom',
                'images' => 'images/category/idiom.png',
                'description' => 'Belajar ungkapan-ungkapan unik dalam bahasa Inggris',
            ],
            [
                'name' => 'Phrase',
                'images' => 'images/category/phrase.png',
                'description' => 'Kuasai frasa-frasa berguna untuk percakapan sehari-hari',
            ],
            [
                'name' => 'Memorization',
                'images' => 'images/category/memorization.png',
                'description' => 'Hafalan kata-kata dan ungkapan penting',
            ],
            [
                'name' => 'Conversation',
                'images' => 'images/category/conversation.png',
                'description' => 'Latihan percakapan untuk meningkatkan kemampuan speaking',
            ],
            [
                'name' => 'Pronunciation',
                'images' => 'images/category/pronunciation.png',
                'description' => 'Pelajari cara pengucapan kata yang benar',
            ],
            [
                'name' => 'Listening',
                'images' => 'images/category/listening.png',
                'description' => 'Latihan kemampuan mendengar dalam bahasa Inggris',
            ],
            [
                'name' => 'Writing',
                'images' => 'images/category/writing.png',
                'description' => 'Asah kemampuan menulis dalam bahasa Inggris',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
