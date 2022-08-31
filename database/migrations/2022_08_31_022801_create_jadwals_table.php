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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('tgl_planning');
            $table->dateTime('slot_time');
            $table->integer('qty_tube');
            $table->integer('qty_tire');
            $table->unsignedBigInteger('id_md');
            $table->unsignedBigInteger('id_expedisi');
            $table->timestamps();

            $table->foreign('id_md')->references('id')->on('maindealers')->onDelete('cascade');;
            $table->foreign('id_expedisi')->references('id')->on('expedisis')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
};
