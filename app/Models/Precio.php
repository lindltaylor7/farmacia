<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precio extends Model
{
    protected $fillable = ['p_unitario', 'p_costo', 'p_caja', 'utilidad', 'p_venta_caja', 'medicamento_id'];
    use HasFactory;
}
