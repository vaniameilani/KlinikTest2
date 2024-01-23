<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpsList extends Model
{
    use HasFactory;
    protected $fillable = ['village_id','no_tps'];
}
