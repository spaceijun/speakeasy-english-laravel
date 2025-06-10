<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hafalan>
 */
class HafalanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => '1',
            'name' => $this->faker->word(),
            'images' => 'storage/images/swaraningcode.png',
            'description' => $this->faker->paragraph(3),
        ];
    }
}
