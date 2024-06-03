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
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->unsignedBigInteger('contribution_id')->index();
            $table->unsignedBigInteger('payment_method_id')->index();
            $table->unsignedBigInteger('payment_status_id')->index();
            $table->bigInteger('payment_amount');
            $table->text('description');
            $table->boolean('is_archived');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
