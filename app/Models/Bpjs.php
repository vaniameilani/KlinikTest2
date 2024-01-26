<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpjs extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_bpjs';
    protected $fillable = ['nik_bpjs', 'no_bpjs', 'jenis_bpjs', 'faskes_bpjs'];
}
