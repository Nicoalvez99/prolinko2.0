<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $fillable = ['nombre', 'codigo', 'cantidad', 'cantidadKg', 'precio', 'precioTotal', 'stock', 'rubro', 'user_id'];
    use HasFactory;
}
