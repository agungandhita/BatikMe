<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Berita;
use App\Models\Produk;
use App\Models\Category;
use App\Models\Dashboard;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase; // Gunakan ini jika Anda ingin menghapus data setelah setiap pengujian

    /** @test */
    public function it_can_display_the_home_page()
    {
        // Pastikan untuk memuat data yang ada
        $categories = Category::all();
        $products = Produk::all();
        $banners = Dashboard::all();
        $news = Berita::all();

        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertViewIs('client.home.index');

        $response->assertViewHas('data', function($viewCategories) use ($categories) {
            return $viewCategories->count() === $categories->count();
        });

        $response->assertViewHas('produk', function($viewProducts) use ($products) {
            return $viewProducts->count() === $products->count();
        });

        $response->assertViewHas('tes', function($viewTes) use ($products) {
            return $viewTes->count() === $products->count();
        });

        $response->assertViewHas('kategori', function($viewKategori) use ($categories) {
            return $viewKategori->count() === $categories->count();
        });

        $response->assertViewHas('gambar', function($viewBanners) use ($banners) {
            return $viewBanners->count() === $banners->count();
        });

        $response->assertViewHas('berita', function($viewNews) use ($news) {
            return $viewNews->count() === $news->count();
        });
    }
 
}
