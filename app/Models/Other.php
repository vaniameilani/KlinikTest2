<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_other';
    protected $fillable = ['nik_other', 'no_hp', 'nama_bank', 'no_rek', 'no_tps', 'alamat_tps', 'disabilitas'];
}
