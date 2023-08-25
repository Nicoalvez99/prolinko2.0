<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubros extends Model
{
    protected $fillable = ['nombre', 'user_id'];
    use HasFactory;
}
