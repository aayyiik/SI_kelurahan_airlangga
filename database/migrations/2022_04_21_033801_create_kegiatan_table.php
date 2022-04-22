<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->bigIncrements('id_kegiatan');
            $table->unsignedBigInteger('nik_admin');
            $table->foreign('nik_admin')->references('nik')->on('users');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id_status')->on('status');
            $table->string('nama_kegiatan');
            $table->dateTime('tanggal');
            $table->string('tempat')->nullable();
            $table->string('deskripsi');
            $table->string('gambar')->nullable();
            $table->integer('validasi')->nullable();
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
        Schema::dropIfExists('kegiatan');
    }
}
