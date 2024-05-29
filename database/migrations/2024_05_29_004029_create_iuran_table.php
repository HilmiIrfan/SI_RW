<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIuranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iuran', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->bigInteger('id_warga')->unsigned()->index();
            $table->string('nama_warga');
            $table->date('tanggal_iuran');
            $table->decimal('nominal', 10, 2);
            $table->timestamps();

            $table->foreign('id_warga')->references('id')->on('warga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iuran');
    }
}

