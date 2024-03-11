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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('keyword');
            $table->date('startDate');
            $table->integer('duration');
            $table->foreignId('administrator_id')->constrained();
            $table->foreignId('beneficiary_id')->constrained();
            $table->unique(['name', 'keyword']); // Ensuring name and keyword combination is unique
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
