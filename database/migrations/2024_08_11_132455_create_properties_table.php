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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->decimal('value_min');
            $table->decimal('value_max');
            $table->string('type');
            $table->string('beds');
            $table->string('bath');
            $table->string('balcony');
            $table->string('decoration');
            $table->string('carpet_area')->nullable();
            $table->string('floor')->nullable();
            $table->string('transaction_type');
            $table->integer('lift');
            $table->integer('facing');
            $table->string('additional_rooms');
            $table->string('age_of_construction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
