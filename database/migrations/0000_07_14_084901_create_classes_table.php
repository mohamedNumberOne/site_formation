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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->boolean('active')->nullable();
            $table->string('drive_link_front')->nullable();
            $table->string('drive_link_back')->nullable();
            $table->string('meet_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
