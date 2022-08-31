<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loadings', function (Blueprint $table) {
            $table->unsignedBigInteger('id_jadwal');
            $table->string('aktual_tire');
            $table->string('aktual_tube');
            $table->dateTime('daftar');
            $table->dateTime('loading');
            $table->dateTime('selesai');
            $table->dateTime('segel');
            $table->integer('no_docking');
            $table->string('checker');
            $table->string('no_mobil');
            $table->string('nama_sopir');
            $table->string('no_container');
            $table->string('no_segel');
            $table->text('note');
            $table->unsignedBigInteger('id_status');
            $table->timestamps();

            $table->foreign('id_jadwal')->references('id')->on('jadwals');
            $table->foreign('id_status')->references('id')->on('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loadings');
    }
};
