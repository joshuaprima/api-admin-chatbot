<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetidaksesuaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketidaksesuaian', function (Blueprint $table) {
            $table->increments('ketidaksesuaianID');
            $table->string('NIK');
            $table->string('KPJ');
            $table->string('email');
            $table->string('nohp');
            $table->text('alasan');
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
        Schema::dropIfExists('ketidaksesuaian');
    }
}
