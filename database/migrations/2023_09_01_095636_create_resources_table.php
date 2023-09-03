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
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->boolean('is_downloadable')->default(true);
            $table->unsignedBigInteger('graduation_id');
            $table->timestamps();
            $table->softDeletes(); // Adds soft deletes timestamps
            
            // Define foreign key constraint
            $table->foreign('graduation_id')->references('id')->on('graduations')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
