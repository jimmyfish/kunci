<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPinjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pinjaman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pengguna_id')->unsigned();
            $table->foreign('pengguna_id')->references('id')->on('pengguna');
            $table->integer('kunci_id')->unsigned();
            $table->foreign('kunci_id')->references('id')->on('kunci');
            $table->dateTime('tanggal_pinjam');
            $table->dateTime('tanggal_kembali');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pinjaman');
    }
}
