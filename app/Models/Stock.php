<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['cantidad', 'anaquel', 'f_vencimiento', 'f_ingreso', 'medicamento_id'];

    public function medicamento(){
        return $this->belongsTo('App\Models\Medicamento');
    }

}
