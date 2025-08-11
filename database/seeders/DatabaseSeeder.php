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

        $admin = User::create([
            'image' => 'ft_user/aa.jpeg',
            'username' => 'Admin BatikMe',
            'email' => 'admin@batikme.com',
            'password' => Hash::make('admin123!@#'),
            'no_tlpn' => '082231719219',
            'alamat' => 'Jl. Batik Nusantara No. 1',
            'role' => 'admin'
        ]);

        // Assign admin role if using spatie/laravel-permission
        if (class_exists('Spatie\Permission\Models\Role')) {
            $adminRole = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'admin']);
            $clientRole = \Spatie\Permission\Models\Role::firstOrCreate(['name' => 'client']);
            $admin->assignRole('admin');
        }
        // User::factory(5)->create();

        // Category::factory(2)->create();
        // Berita::factory(3)->create();
    }
}
