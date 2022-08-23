<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_id')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nama_ortu')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_seri_akta')->nullable();
            $table->dateTime('tgl_register')->nullable();
            $table->string('status')->nullable();
            $table->string('nama_pengambil')->nullable();
            $table->string('nohp_pengambil')->nullable();
            $table->dateTime('tgl_pengambilan')->nullable();
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
        Schema::dropIfExists('dokumen');
    }
}
