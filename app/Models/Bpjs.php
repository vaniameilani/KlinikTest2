<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;
    protected $fillable = ['nik_bpjs', 'no_bpjs', 'jenis_bpjs'];
}
