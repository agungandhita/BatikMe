<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Produk;
use App\Models\Category;
use App\Models\ProdukImage;
use App\Models\User;
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
        User::factory(5)->create();

        Category::factory(2)->create();
        // $products = Produk::factory(5)->create();

        // $products->each(function ($product) {
        //     ProdukImage::factory(3)->create(['produk_id' => $product->produk_id]);
        // });
    }
}
