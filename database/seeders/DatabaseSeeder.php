<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'image' => 'ft_user/aa.jpeg',
            'username' => 'Andhi',
            'email' => 'example@gmail.com',
            'password' => Hash::make(12345),
            'no_tlpn' => '082231719219',
            'alamat' => 'parengan',
            'role' => 'admin'
        ]);
        // User::factory(5)->create();

        Category::factory(2)->create();
        Berita::factory(3)->create();
    }
}
