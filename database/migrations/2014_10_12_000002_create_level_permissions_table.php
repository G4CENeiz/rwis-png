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
        Schema::create('level_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('user_level_id')->index();
            $table->unsignedBigInteger('permission_id')->index();
            $table->boolean('is_archived');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_permissions');
    }
};
