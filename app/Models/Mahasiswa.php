<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nik',
        'nisn',
        'email_stimata',
        'nama_lengkap',
        'email',
        'nomor_hp',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'asal_sekolah',
        'alamat_asal',
        'alamat_domisili',
        'nama_ayah',
        'nama_ibu',
        'kwarganegaraan',
        'alat_transportasi',
        'tahun_masuk',
        'tanggal_daftar',
        'periode_daftar',
        'jalur_pendaftaran',
        'prodi',
    ];
}
