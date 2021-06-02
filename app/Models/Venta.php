<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ['codigo', 'utilidad', 'fecha', 'cliente_id'];
    use HasFactory;
}
