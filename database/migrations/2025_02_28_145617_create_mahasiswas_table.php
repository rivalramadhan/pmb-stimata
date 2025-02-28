<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nisn')->unique();
            $table->string('email_stimata');
            $table->string('nama_lengkap')->unique();
            $table->string('email')->unique();
            $table->string('nomor_hp');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('asal_sekolah');
            $table->string('alamat_asal');
            $table->string('alamat_domisili');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('kwarganegaraan');
            $table->string('alat_transportasi');
            $table->string('tahun_masuk');
            $table->date('tanggal_daftar');
            $table->string('periode_daftar');
            $table->string('jalur_pendaftaran');
            $table->string('prodi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
