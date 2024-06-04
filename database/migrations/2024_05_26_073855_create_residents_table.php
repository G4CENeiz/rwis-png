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
        Schema::create('residents', function (Blueprint $table) {
            $table->id('resident_id');
            $table->unsignedBigInteger('nik');
            $table->string('name', 100);
            $table->string('birth_place', 50);
            $table->date('birth_date');
            $table->enum('gender', [
                'Laki-laki',
                'Perempuan'
            ]);
            $table->unsignedBigInteger('religion_id')->index();
            $table->enum('citizenship', [
                'WNI',
                'WNA'
            ]);
            $table->unsignedBigInteger('education_level_id')->index();
            $table->enum('blood_type', [
                'A',
                'B',
                'AB',
                'O',
            ]);
            $table->unsignedBigInteger('profession_id')->index();
            $table->boolean('goverment_employees');
            $table->unsignedBigInteger('income_range_id')->index();
            $table->unsignedBigInteger('family_id')->index();
            $table->unsignedBigInteger('family_member_status_id')->index();
            $table->unsignedBigInteger('marital_status_id')->index();
            $table->date('marriage_date')->nullable();
            $table->boolean('is_archived')->default(false);
            $table->timestamps();
            
            $table->foreign('religion_id')->references('religion_id')->on('religions');
            $table->foreign('education_level_id')->references('education_level_id')->on('education_levels');
            $table->foreign('profession_id')->references('profession_id')->on('professions');
            $table->foreign('income_range_id')->references('income_range_id')->on('income_ranges');
            $table->foreign('family_id')->references('family_id')->on('families');
            $table->foreign('family_member_status_id')->references('family_member_status_id')->on('family_member_statuses');
            $table->foreign('marital_status_id')->references('marital_status_id')->on('marital_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
