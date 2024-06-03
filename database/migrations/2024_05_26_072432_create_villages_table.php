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
        Schema::create('villages', function (Blueprint $table) {
            $table->id('village_id');
            $table->unsignedBigInteger('district_id')->index();
            $table->string('village_name', 100);
            $table->boolean('is_archived')->default(false);
            $table->timestamps();

            $table->foreign('district_id')->references('district_id')->on('districts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villages');
    }
};
