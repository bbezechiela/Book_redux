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
        Schema::create('orders', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedBigInteger('book_id');
            // $table->foreign('book_id')->references('id')->on('books');
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('id')->on('address');
            $table->string('shipping_option');
            // $table->string('payment_method');
            $table->string('order_status');
            // $table->text('shipping_total');
            $table->text('total_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
