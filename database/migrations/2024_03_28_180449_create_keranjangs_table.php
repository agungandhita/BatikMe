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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id('keranjang_id');
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade'); 
            $table->foreignId('produk_id')->constrained('produks', 'produk_id')->onDelete('cascade'); 
            $table->integer('qty')->default(1);
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
        Schema::dropIfExists('keranjangs');
    }
};
