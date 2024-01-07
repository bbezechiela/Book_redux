<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('message_id');
            $table->unsignedBigInteger('sender_id');
            $table->foreign('sender_id')->references('id')->on('users');
            $table->unsignedBigInteger('receiver_id');
            $table->string('message_content');
            $table->timestamps();
            $table->unsignedBigInteger('conversation_id');
            $table->foreign('conversation_id')->references('conversation_id')->on('conversations');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
