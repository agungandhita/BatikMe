<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * 
     */
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('berita_id');
            $table->string('judul');
            $table->text('slug');
            $table->text('image');
            $table->text('isi');
            $table->text('kategori');
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
     *
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
