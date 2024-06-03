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
        Schema::create('cities', function (Blueprint $table) {
            $table->id('city_id');
            $table->unsignedBigInteger('province_id')->index();
            $table->string('city_name', 100);
            $table->boolean('is_archived')->default(false);
            $table->timestamps();

            $table->foreign('province_id')->references('province_id')->on('provinces');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
