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
        Schema::create('petition_applications', function (Blueprint $table) {
            $table->id();
            $table->string('serial_No');
            $table->string('case_type');
            $table->string('case_identifier_year');
            $table->string('copy_type');
            $table->string('case_status');
            $table->string('side_one_type');
            $table->string('side_one_name');
            $table->string('side_two_type');
            $table->string('side_two_name');
            $table->string('appealing_side');
            $table->string('comment');
            $table->boolean('more_from_side_one');
            $table->boolean('more_from_side_two');
            $table->string('type');
            $table->string('status');
            $table->date('application_date');
            $table->date('settlement_date');
            $table->foreignId('court_id')->constrained();
            $table->foreignId('district_id')->constrained();
            $table->foreignId('division_id')->constrained();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('comparer_id');
            $table->foreign('comparer_id')->references('id')->on('users');
            $table->unsignedBigInteger('typist_id');
            $table->foreign('typist_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        chema::dropIfExists('petition_applications');
    }
};
