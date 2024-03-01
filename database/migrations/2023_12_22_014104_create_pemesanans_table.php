<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('pemesanan_id');
            $table->foreignId('user_id');
            $table->foreignId('produk_id');
            $table->string('alamat');
            $table->text('doc_no');
            $table->bigInteger('amount');
            $table->text('description');
            $table->string('payment_status');
            $table->string('payment_link');
            $table->string('expired');
            $table->boolean('comment')->default(false);
            $table->enum('status',['unpaid','paid'])->default('unpaid');
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
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};
