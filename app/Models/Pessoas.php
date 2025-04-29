<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{
    protected $table = "tb_pessoas";
    protected $fillable = ['nome', 'id'];
}
