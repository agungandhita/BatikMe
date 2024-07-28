<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Berita;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BeritaControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_the_index_page_for_admin()
    {
        $adminUser = User::factory()->create([
            'role' => 'admin',
        ]);
        $this->actingAs($adminUser);

        $berita = Berita::factory()->create();

        $response = $this->get('/berita');

        $response->assertStatus(200);

        $response->assertViewIs('admin.berita.berita');

        $response->assertViewHas('data', function ($viewBerita) use ($berita) {
            return $viewBerita->contains($berita);
        });
    }


/** @test */
public function it_can_store_a_new_berita()
{
    // Buat pengguna admin dan autentikasi
    $adminUser = User::factory()->create([
        'role' => 'admin',
    ]);
    $this->actingAs($adminUser);

    // Data untuk testing
    $data = [
        'judul' => 'New Berita',
        'image' => UploadedFile::fake()->image('test.jpg'),
        'kategori' => 'Kategori',
        'isi' => 'Isi berita'
    ];

    // Lakukan POST request
    $response = $this->post('/berita/tambah/add', $data);

    // Verifikasi status redirect
    $response->assertStatus(302);
    $response->assertRedirect('/berita'); // Mengarahkan kembali ke halaman '/berita'

    // Verifikasi bahwa data baru ada di database
    $this->assertDatabaseHas('berita', [
        'judul' => 'New Berita',
        'kategori' => 'Kategori',
        'isi' => 'Isi berita'
    ]);
}




    /** @test */
    public function it_can_update_an_existing_berita()
    {
        // Buat user dan autentikasi
        $user = User::factory()->create();
        $this->actingAs($user);

        // Buat berita
        $berita = Berita::factory()->create();

        // Buat file dummy
        $file = UploadedFile::fake()->image('updated_photo.jpg');

        // Kirim permintaan PUT untuk memperbarui berita
        $response = $this->put("/berita/{$berita->id}", [
            'judul' => 'Updated Berita',
            'image' => $file,
            'kategori' => 'Kategori 2',
            'isi' => 'Isi berita yang diperbarui',
        ]);

        // Periksa pengalihan
        $response->assertRedirect('/berita');

        // Periksa bahwa berita diperbarui di database
        $this->assertDatabaseHas('beritas', [
            'id' => $berita->id,
            'judul' => 'Updated Berita',
            'kategori' => 'Kategori 2',
            'isi' => 'Isi berita yang diperbarui',
            'user_updated' => $user->id,
        ]);

        // Hapus file yang di-upload
        Storage::disk('public')->delete('image/' . $file->hashName());
    }

    /** @test */
    public function it_can_destroy_an_existing_berita()
    {
        // Buat user dan autentikasi
        $user = User::factory()->create();
        $this->actingAs($user);

        // Buat berita
        $berita = Berita::factory()->create();

        // Kirim permintaan DELETE untuk menghapus berita
        $response = $this->delete("/berita/{$berita->id}");

        // Periksa pengalihan
        $response->assertRedirect('/berita');

        // Periksa bahwa berita tidak ada di database
        $this->assertDatabaseMissing('beritas', [
            'id' => $berita->id,
        ]);
    }
}
