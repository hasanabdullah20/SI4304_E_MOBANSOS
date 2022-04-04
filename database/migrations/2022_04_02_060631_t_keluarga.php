<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('t_keluarga', function (Blueprint $table) {
            $table->bigInteger('nik_keluarga');
            $table->string('email', 50);
            $table->string('password', 500);
            $table->string('nama_kepala_keluarga', 255);
            $table->string('nohp', 50);
            $table->string('alamat', 500);
            $table->boolean('is_validated');
            $table->bigInteger('id_rt');
            $table->bigInteger('id_pendaftaran_rt');
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
        Schema::drop('t_keluarga');
    }
}
