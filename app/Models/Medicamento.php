<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Medicamento extends Model
{
    protected $fillable=['n_generico','n_comercial', 'concent', 'present', 'lab', 'img', 'nro_caja'];
    
    public function stock(){
        return $this->belongsTo('App\Models\Stock');
    }

    use HasFactory;
}
