<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $fillable = ['id_contador', 'nombre', 'email', 'id_cliente'];
    use HasFactory;
}
