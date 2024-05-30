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
        Schema::create('contribution_details', function (Blueprint $table) {
            $table->id('contribution_detail_id');
            $table->unsignedBigInteger('contribution_id')->index();
            $table->unsignedBigInteger('contribution_type_id')->index();
            $table->bigInteger('contribution_amount');
            $table->boolean('is_archived');
            $table->timestamps();

            $table->foreign('contribution_id')->references('contribution_id')->on('contributions');
            $table->foreign('contribution_type_id')->references('contribution_type_id')->on('contribution_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribution_details');
    }
};
