<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TpsVillage extends Model
{
    use HasFactory;
    protected $fillable = ['district_id', 'name'];
}
