<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('tempat_tgl_lhr')->nullable();
            $table->string('nisn')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('jumlah_saudara')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('alamat_rumah')->nullable();
            $table->string('tinggal_dgn')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('alamat_sklh_asal')->nullable();
            $table->string('nik')->nullable();
            $table->string('no_kartu_keluarga')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita_cita')->nullable();
            $table->string('jarak_sekolah')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('tgl_lhr_ayah')->nullable();
            $table->string('agama_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('alamat_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('tgl_lhr_ibu')->nullable();
            $table->string('agama_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('alamat_ibu')->nullable();
            $table->string('jurusan_pilihan')->nullable();
            $table->string('email')->nullable();
            $table->string('no_telp')->nullable();
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
        Schema::dropIfExists('registrations');
    }
};
