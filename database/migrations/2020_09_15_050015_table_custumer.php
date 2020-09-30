<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCustumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custumers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NIK');
            $table->string('NamaCustumer');
            $table->text('Alamat');
            $table->date('TglLahir');
            $table->string('JenisKelamin');
            $table->string('StatusKawin');
            $table->string('Nohp');
            $table->string('Username');
            $table->string('Password');
            $table->string('Photo');
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
        Schema::dropIfExists('custumers');
    }
}
