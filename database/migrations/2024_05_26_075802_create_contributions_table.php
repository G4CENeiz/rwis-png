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
        Schema::create('contributions', function (Blueprint $table) {
            $table->id('contribution_id');
            $table->unsignedBigInteger('recipient_id')->index();
            $table->unsignedBigInteger('general_ledger_id')->index();
            $table->enum('recipient_type', [
                'Keluarga',
                'Rumah',
                'Dasawisma',
                'RT',
            ]);
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            
            $table->foreign('recipient_id')->references('family_id')->on('families');
            $table->foreign('general_ledger_id')->references('general_ledger_id')->on('general_ledgers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contributions');
    }
};
