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
        Schema::create('reviews', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id')->references('id')->on('books');
            $table->unsignedBigInteger('request_id')->nullable();
            $table->foreign('request_id')->references('id')->on('exchange_requests');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('rate_value')->nullable();
            $table->string('content_accuracy')->nullable();
            $table->string('description_accuracy')->nullable();
            $table->string('interaction')->nullable();
            $table->text('description');            
            $table->text('first_img')->nullable();
            $table->text('second_img')->nullable();
            $table->text('third_img')->nullable();
            $table->text('fourth_img')->nullable();
            $table->text('fifth_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
