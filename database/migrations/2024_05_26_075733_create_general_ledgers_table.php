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
        Schema::create('general_ledgers', function (Blueprint $table) {
            $table->id('general_ledger_id');
            $table->unsignedBigInteger('issuer_id')->index();
            $table->enum('issuer_type', [
                'RW',
                'RT'
            ]);
            $table->boolean('is_archived')->default(false);
            $table->timestamps();

            $table->foreign('issuer_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_ledgers');
    }
};
