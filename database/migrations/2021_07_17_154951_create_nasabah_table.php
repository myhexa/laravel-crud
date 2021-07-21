<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasabahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nasabah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_undangan',27);
            $table->string('no_registrasi',27);
            $table->string('username',50);
            $table->string('password',225);
            $table->string('no_ktp',16);
            $table->string('nama',200);
            $table->date('tgl_lahir');
            $table->string('ahli_waris',150);
            $table->string('hubungan',150);
            $table->string('no_hp',20);
            $table->string('alamat',225);
            $table->string('kota',150);
            $table->string('provinsi',150);
            $table->string('no_rek_dana',20);
            $table->string('foto_ktp',200);
            $table->string('foto_selfie',200);
            //$table->string('gambarMahasiswa');
           //$table->string('path');
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
        Schema::dropIfExists('nasabah');
    }
}
