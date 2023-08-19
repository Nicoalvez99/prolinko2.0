<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    protected $fillable = ['nombre', 'proveedor', 'user_id'];
    use HasFactory;
}
