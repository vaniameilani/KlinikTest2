<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kk extends Model
{
    use HasFactory;
    protected $fillable = ['nik_kk', 'kk', 'dokumen_kk', 'status', 'nama', 'scan_kk'];

}
