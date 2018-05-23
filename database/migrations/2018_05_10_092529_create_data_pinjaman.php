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
            $table->integer('id_pengguna')->unsigned();
            $table->foreign('id_pengguna')->references('id')->on('pengguna');
            $table->integer('id_kunci')->unsigned();
            $table->foreign('id_kunci')->references('id')->on('kunci');
            $table->dateTime('tanggal_pinjam');
            $table->dateTime('tanggal_kembali');
            $table->timestamps();
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
