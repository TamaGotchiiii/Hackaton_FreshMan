<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePengambilandarah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengambilandarah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemesan');
            $table->string('nik_pemesan');
            $table->string('no_tlp_pemesan');
            $table->string('nama_pasien');
            $table->integer('id_rumahsakit')->unsigned();
            $table->foreign('id_rumahsakit')->references('id')->on('rumahsakit');
            $table->string('lampiran');
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
        Schema::dropIfExists('pengambilandarah');
    }
}
