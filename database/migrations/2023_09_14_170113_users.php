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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('type');                                    
            // $table->string('first_name')->nullable();
            // $table->string('last_name')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('uid');
            // $table->string('phone_number');
            // $table->string('address')->nullable();
            // $table->string('birthday')->nullable();
            // $table->string('gender')->nullable();
            // $table->integer('age');
            $table->string('interest')->nullable();            
            $table->text('profile_photo')->nullable();

            // seller
            // $table->string('owner_name')->nullable();
            // $table->string('registration_number')->nullable();
            // $table->string('business_name')->nullable();
            // $table->string('date_registered')->nullable();
            // $table->string('permit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
