<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip_pegawai', 8);
            $table->string('nama_pegawai', 50);
            $table->string('tempat_lahir_pegawai', 25);
            $table->date('tanggal_lahir_pegawai');
            $table->enum('jenis_kelamin_pegawai', ['L', 'P']);
            $table->string('agama_pegawai', 50);
            $table->string('alamat_pegawai', 191);
            $table->string('no_hp_pegawai', 15);
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
        Schema::dropIfExists('pegawai');
    }
}
