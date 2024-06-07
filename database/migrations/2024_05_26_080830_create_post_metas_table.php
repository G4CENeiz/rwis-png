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
        Schema::create('post_metas', function (Blueprint $table) {
            $table->id('post_meta_id');
            $table->unsignedBigInteger('post_id')->index();
            $table->string('key', 50);
            $table->text('content');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            $table->timestamp('published_at')->nullable();

            $table->foreign('post_id')->references('post_id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_metas');
    }
};
