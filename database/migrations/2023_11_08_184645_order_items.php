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
        Schema::create('order_items', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('book_id');
            $table->foreign('book_id')->references('id')->on('books');            
            $table->unsignedBigInteger('qty');
            $table->text('bar_code')->nullable();
            $table->string('order_status');
            $table->string('shipping_status')->nullable();
            $table->string('shipping_fee')->nullable();
            $table->text('tracking_number')->nullable();
            $table->unsignedBigInteger('pickup_address_id')->nullable();
            $table->foreign('pickup_address_id')->references('id')->on('address');
            $table->string('pickup_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
