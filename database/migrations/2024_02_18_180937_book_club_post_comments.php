<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('book_club_post_comments', function(Blueprint $table) {
            $table->bigIncrements('comment_id');
            $table->unsignedBigInteger('post_id');
            $table->foreign('post_id')->references('post_id')->on('book_club_posts');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('book_club_posts_comments');
    }
};
