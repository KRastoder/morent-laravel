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
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string("car_copany_name");
            $table->string("name");
            $table->string("type");
            $table->string("gear");
            $table->unsignedSmallInteger("fuel_copacity");
            $table->unsignedSmallInteger("pople_copacity");
            $table->unsignedInteger("price_per_day");
            $table->string("status")->default("avalible");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car');
    }
};