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
        Schema::create('graduants_results', function (Blueprint $table) {
            $table->id();
            $table->string('college_cumpus')->nullable();
            $table->string('school_faculty')->nullable();
            $table->string('programme')->nullable();
            $table->string('reg_adm_no')->unique();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('specialization')->nullable();
            $table->string('mean_score')->nullable();
            $table->string('status')->nullable();
            $table->text('status_msg')->nullable();
            $table->string('degree_class')->nullable();
            $table->string('level')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduants_results');
    }
};
