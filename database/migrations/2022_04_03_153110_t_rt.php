<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TRt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_rt', function (Blueprint $table) {
            $table->bigIncrements('id_rt');
            $table->string('kota', 50);
            $table->string('kecamatan', 255);
            $table->string('kelurahan', 255);
            $table->string('rt', 5);
            $table->string('rw', 5);
            $table->string('nama_ketua', 255);
            $table->string('email_ketua', 255);
            $table->string('password', 255);
            $table->string('jumlah_penduduk', 5);
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
        Schema::drop('t_rt');
    }
}
