<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'descripcion', 'user_id'];
    use HasFactory;
}
