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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string("photo") -> nullable() ;
            $table->string("description") -> nullable() ;
            $table->unsignedBigInteger("id_cour") -> nullable()  ;

            $table -> foreign('id_cour') -> references('id') -> on('cours') -> onDelete('set null') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
