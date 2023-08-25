<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $fillable = ['aProductos', 'total', 'aRubros', 'user_id'];
    use HasFactory;
}
