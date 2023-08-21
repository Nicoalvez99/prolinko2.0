<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $fillable = ['nombre', 'email', 'password', 'precios'];
    use HasFactory;
}
