<?php

use Carbon\Carbon;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->unsignedBigInteger('author_id')->index();
            $table->unsignedBigInteger('parent_id')->index()->nullable();
            $table->string('title', 75);
            $table->string('meta_title', 100);
            $table->string('slug', 100);
            $table->tinyText('summary');
            $table->text('content');
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            $table->timestamp('published_at')->nullable();

            $table->foreign('author_id')->references('user_id')->on('users');
            $table->foreign('parent_id')->references('post_id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
