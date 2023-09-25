<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = ['nombre', 'codigo', 'precio', 'stock', 'stockKg', 'rubro', 'cantidadPorSemana', 'user_id'];
    use HasFactory;
}
