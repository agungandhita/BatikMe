<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imagePath = 'img/aa.jpeg';
        return [
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => Hash::make('12345678'),
            'image' => Storage::url($imagePath),
            'no_tlpn' => '723457270702',
            'alamat' => fake()->address(),
            'role' => 'client',
            'user_created' => '1',
            'user_updated' => null,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
