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
        Schema::create('leaves_updates', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id')->nullable();
            $table->string('employee_name')->nullable();
            $table->integer('annual_leave')->nullable();
            $table->integer('casual_leave')->nullable();
            $table->integer('sick_leave')->nullable();
            $table->integer('medical_leave')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves_updates');
    }
};
