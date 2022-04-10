<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TRequestBansos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_requestBansos', function (Blueprint $table) {
            $table->increments('id_request');
            $table->integer('id_keluarga')->unsigned();
            $table->foreign('id_keluarga')->references('id_keluarga')->on('t_keluarga');
            $table->integer('id_rt')->unsigned();
            $table->foreign('id_rt')->references('id_rt')->on('t_rt');
            $table->string('tujuan_rt');
            $table->string('jenis_bansos');
            $table->string('status');
            $table->date('updated_at');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('t_requestBansos');
    }
}
