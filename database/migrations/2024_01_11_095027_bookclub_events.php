<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_club_events', function (Blueprint $table) {
            $table->bigIncrements('event_id');
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('book_club_id')->on('book_clubs');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('type');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->text('description');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema:dropIfExist('book_club_events');
    }
};
