<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('nik');
            $table->unsignedBigInteger('id_jabatan');
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatan');
            $table->unsignedBigInteger('id_kelurahan');
            $table->foreign('id_kelurahan')->references('id_kelurahan')->on('kelurahan');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
