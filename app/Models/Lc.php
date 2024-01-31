<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lc extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_lc';
    protected $fillable = ['nik_lc', 'no_kartu', 'jenis_kartu', 'tanggal_pembuatan', 'sumber_data', 'nama_koor', 'telp_koor', 'status', 'tanggal_penarikan', 'alasan_penarikan', 'scan_lc'];
}
