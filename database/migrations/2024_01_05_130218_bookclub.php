<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // club schema
        Schema::create('book_clubs', function(Blueprint $table) {
            $table->bigIncrements('book_club_id');
            $table->string('book_club_name');
            $table->timestamps();
        });

        // club moderators schema
        Schema::create('book_club_moderators', function(Blueprint $table) {
            $table->bigIncrements('moderator_id');
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('book_club_id')->on('book_clubs');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        }); 

        // club members schema
        Schema::create('book_club_members', function(Blueprint $table) {
            $table->bigIncrements('member_id');
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('book_club_id')->on('book_clubs');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_clubs');
        Schema::dropIfExists('book_club_moderators');
        Schema::dropIfExists('book_club_members');
    }
};
