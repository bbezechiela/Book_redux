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
        Schema::create('books', function(Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('status');
            $table->string('unit');
            $table->text('book_photo')->nullable();
            $table->text('back_cover')->nullable();
            $table->text('interior_photo')->nullable();
            $table->string('title');
            $table->string('author');
            $table->string('edition');
            $table->string('genre');
            $table->unsignedBigInteger('stock');
            $table->text('condition');
            $table->text('description');
            $table->string('language');            

            $table->string('price')->nullable();
            $table->text('exchange_preferences')->nullable();

            $table->text('rental_duration')->nullable();
            $table->text('rental_terms_and_condition')->nullable();
            $table->text('security_deposit')->nullable();

            $table->integer('weight');
            $table->integer('width');
            $table->integer('height'); 
            $table->integer('length');
            $table->string('courier');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
