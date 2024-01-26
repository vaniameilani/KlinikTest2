<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ktp extends Model
{
    use HasFactory;
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'pekerjaan','provinsi', 'kota_kab', 'kecamatan', 'desa_kel', 'rt', 'rw', 'alamat', 'kode_pos', 'status_perkawinan', 'kewarganegaraan', 'asal_negara', 'scan_ktp'];
}

