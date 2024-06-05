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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id('comment_id');
            $table->unsignedBigInteger('post_id')->index();
            $table->unsignedBigInteger('parent_id')->index()->nullable();
            $table->string('title');
            $table->text('content');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            $table->timestamp('published_at')->nullable();

            $table->foreign('post_id')->references('post_id')->on('posts');
            $table->foreign('parent_id')->references('comment_id')->on('post_comments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
