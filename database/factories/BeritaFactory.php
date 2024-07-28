<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'judul' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'kategori' => $this->faker->word,
            'isi' => $this->faker->paragraph, 
            'created_at' => now(),
            'updated_at' => null,
            'deleted' => false,
        ];
    }
}
