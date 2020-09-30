<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Petugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NamaPetugas');
            $table->date('TglLahir');
            $table->string('Alamat');
            $table->string('Jabatan');
            $table->string('NoHp');
            $table->string('Username');
            $table->string('Password');
            $table->integer('idLevel')->unsigned();
            $table->string('Photo');
            $table->timestamps();
            $table->foreign('idLevel')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Petugas');
    }
}
