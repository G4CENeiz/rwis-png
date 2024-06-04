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
        Schema::create('families', function (Blueprint $table) {
            $table->id('family_id');
            $table->unsignedBigInteger('nkk');
            $table->unsignedBigInteger('house_id')->index();
            $table->string('address_street', 50);
            $table->integer('address_rt');
            $table->integer('address_rw');
            $table->unsignedBigInteger('village_id')->index();
            $table->integer('zip_code');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            
            $table->foreign('house_id')->references('house_id')->on('houses');
            $table->foreign('village_id')->references('village_id')->on('villages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
