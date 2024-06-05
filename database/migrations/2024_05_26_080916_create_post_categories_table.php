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
        Schema::create('post_categories', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('post_id')->index();
            $table->unsignedBigInteger('category_id')->index();
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            $table->timestamp('published_at')->nullable();

            $table->foreign('post_id')->references('post_id')->on('posts');
            $table->foreign('category_id')->references('category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_categories');
    }
};
