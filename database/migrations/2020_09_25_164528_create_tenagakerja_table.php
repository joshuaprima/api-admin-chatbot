<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagakerjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenagakerja', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tk');
            $table->string('no_kpj');
            $table->string('status_kpj');
            $table->string('no_npp');
            $table->string('kode_cabang');
            $table->string('nama_tk');
            $table->string('nik_tk');
            $table->string('nama_ibu');
            $table->string('blth_aktif');
            $table->string('blth_nonaktif');
            $table->integer('saldo');
            $table->string('no_hp');
            $table->string('email');
            $table->string('no_rekening');
            $table->string('bank_rekening');
            $table->string('klaim');
            $table->string('status_klaim');
            $table->string('ket_klaim');
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
        Schema::dropIfExists('tenagakerja');
    }
}
