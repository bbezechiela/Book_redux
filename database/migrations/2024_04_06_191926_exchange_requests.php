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
        Schema::create('exchange_requests', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('target_book_id');
            $table->foreign('target_book_id')->references('id')->on('books');
            $table->text('book_filename')->nullable();
            $table->text('back_cover')->nullable();
            $table->text('isbn');
            $table->string('title');
            $table->string('author');
            $table->string('edition');
            $table->string('genre');
            $table->text('description');
            $table->boolean('allow')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchange_requests');
    }
};
