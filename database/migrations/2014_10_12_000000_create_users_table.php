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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('username');
            $table->string('image')->default('fp.png');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['client', 'admin']);
            $table->bigInteger('no_tlpn')->nullable();
            $table->text('alamat')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
