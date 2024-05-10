<?php

namespace Database\Factories;

use App\Models\Produk;
use App\Models\ProdukImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'image' => $this->faker->imageUrl(),
            // 'produk_id' => Produk::factory()->create()->produk_id,
        ];
    }
}
