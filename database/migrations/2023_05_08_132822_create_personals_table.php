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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->text('about')->nullable();
            $table->string('name')->nullable();
            $table->string('degree')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('birthday')->nullable();
            $table->integer('experience')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('freelance')->nullable();
            $table->string('yearsOfExperience')->nullable();
            $table->string('happyClients')->nullable();
            $table->string('completeProjects')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
