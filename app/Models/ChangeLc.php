<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangeLc extends Model
{
    use HasFactory;
    protected $fillable = ['no_kartu', 'jenis_kartu', 'tanggal_upgrade'
, 'alasan_upgrade', 'status', 'tanggal_penarikan', 'alasan_penarikan'];
}