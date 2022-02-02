<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nipd')->nullable();
            $table->string('jenis_kelamin');
            $table->string('nisn')->nullable();
            $table->string('status');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('nik')->nullable();
            $table->string('agama');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->integer('anak_keberapa');
            $table->integer('jumlah_saudara');
            $table->string('sekolah_asal');
            $table->string('nama_ayah_kandung')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nomor_hp_ayah')->nullable();
            $table->string('nama_ibu_kandung')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('nomor_hp_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->string('tanggal_lahir_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('nomor_hp_wali')->nullable();
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
        Schema::dropIfExists('data_sekolahs');
    }
}
