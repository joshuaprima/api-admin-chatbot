<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_npp');
            $table->string('no_npp');
            $table->string('nama_npp');
            $table->text('alamat');
            $table->string('email');
            $table->string('no_telp');
            $table->string('no_hp');
            $table->string('status_npp');
            $table->string('blth_aktif');
            $table->string('blth_nonaktif');
            $table->string('jumlah_tk_terakhir');
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
        Schema::dropIfExists('perusahaan');
    }
}
