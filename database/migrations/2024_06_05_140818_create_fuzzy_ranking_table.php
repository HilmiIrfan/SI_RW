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
        Schema::create('fuzzy_rankings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bansos_id');
            $table->float('nilai');
            $table->timestamps();

            $table->foreign('bansos_id')->references('id')->on('bansos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuzzy_ranking');
    }
};
