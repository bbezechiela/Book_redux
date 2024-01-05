<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_club', function(Blueprint $table) {
            $table->bigIncrements('book_club_id');
            $table->string('book_club_name');
            $table->unsignedBigInteger('book_club_moderators');
            $table->foreign('book_club_moderators')->references('id')->on('users');
            $table->unsignedBigInteger('book_club_members');
            $table->foreign('book_club_members')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_club');
    }
};
