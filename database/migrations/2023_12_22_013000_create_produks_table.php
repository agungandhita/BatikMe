<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id('produk_id');
            $table->foreignId('kategori_id')->constrained('categories')->references('kategori_id');
            $table->string('nama_produk');
            $table->text('deskripsi');
            $table->text('model');
            $table->integer('harga');
            $table->integer('berat');
            $table->integer('terjual')->nullable();
            $table->integer('user_created')->nullable();
            $table->timestamps();
            $table->integer('user_updated')->nullable();
            $table->softDeletes();
            $table->integer('user_deleted')->nullable();
            $table->integer('deleted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
