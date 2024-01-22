<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_club_posts', function(Blueprint $table) {
            $table->id();
            $table->bigIncrements('post_id');
            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')->references('book_club_id')->on('book_clubs');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('caption');
            $table->string('first_img')->nullable();
            $table->string('second_img')->nullable();
            $table->string('third_img')->nullable();
            $table->string('fourth_img')->nullable();
            $table->string('fifth_img')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookclub_posts');
    }
};
