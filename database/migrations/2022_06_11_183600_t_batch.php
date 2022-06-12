<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TBatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_batch', function (Blueprint $table) {
            $table->increments('id_batch');
            // $table->integer('id_keluarga')->unsigned();
            // $table->foreign('id_keluarga')->references('id_keluarga')->on('t_keluarga');
            // $table->integer('id_rt')->unsigned();
            // $table->foreign('id_rt')->references('id_rt')->on('t_rt');
            $table->string('nama_batch', 500);
            $table->date('deadline');
            $table->string('deskripsi', 500);
            // $table->string('ktp', 500);
            // $table->boolean('isacc')->default(0);
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
    }
}
