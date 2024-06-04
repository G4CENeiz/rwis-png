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
        Schema::create('houses', function (Blueprint $table) {
            $table->id('house_id');
            $table->unsignedBigInteger('house_group_id')->index();
            $table->integer('land_area');
            $table->integer('building_area');
            $table->string('domicile_street', 50);
            $table->integer('domicile_rt');
            $table->integer('domicile_rw');
            $table->integer('zip_code');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();

            $table->foreign('house_group_id')->references('house_group_id')->on('house_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
