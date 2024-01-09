<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_club_join_requests', function(Blueprint $table) {
            $table->bigIncrements('join_requests_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('book_club_id');
            $table->foreign('book_club_id')->references('book_club_id')->on('book_clubs');
            $table->string('request_status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_club_join_requests');
    }
};
