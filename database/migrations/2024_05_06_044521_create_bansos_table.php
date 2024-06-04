<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('bansos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('no_kk'); // Assuming 'penduduk' is the name of the table with 'no_kk'
            $table->integer('jumlah_tanggungan');
            $table->decimal('gaji');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->text('surat_tambahan')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->foreign('no_kk')->references('no_kk')->on('penduduk')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bansos');
    }
};
