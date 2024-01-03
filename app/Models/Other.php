<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    use HasFactory;
    protected $fillable = ['nik_other', 'no_hp', 'no_tps', 'alamat_tps', 'disabilitas'];
}
