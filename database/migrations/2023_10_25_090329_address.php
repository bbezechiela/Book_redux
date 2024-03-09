<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Expr\Cast\String_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            // $table->text('user_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('name');
            $table->text('contact_number');
            // $table->text('region');            
            // $table->text('city_municipality');
            // $table->text('brgy_village');
            // $table->string('postal_code');
            // $table->text('street_building_house');
            $table->text('address');
            $table->text('latitude');
            $table->text('longitude');
            $table->boolean('default_address')->nullable();
            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
