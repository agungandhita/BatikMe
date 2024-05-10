<?php

namespace Database\Factories;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'kategori_id' => $this->faker->numberBetween(1, 2),
            // 'nama_produk' => $this->faker->word,
            // 'deskripsi' => $this->faker->sentence,
            // 'model' => $this->faker->word,
            // 'harga' => $this->faker->randomFloat(2, 10, 1000),
            // 'berat' => $this->faker->randomFloat(2, 0.1, 10),
            // 'terjual' => $this->faker->numberBetween(0, 100),
        ];
    }
}
