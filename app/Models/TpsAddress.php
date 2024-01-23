<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpsAddress extends Model
{
    use HasFactory;
    protected $fillable = ['notps_id','alamat_tps'];
}
