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
            $table->string('nomor');
            $table->string('uraian');
            $table->string('jenis');
            $table->string('tahun');
            $table->string('diselenggarakan');
            $table->string('disalurkan');
            $table->string('kategori');
            $table->string('alamat');
            $table->string('nama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->timestamps();
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
