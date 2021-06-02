<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Medicamento extends Model
{
    protected $fillable=['n_generico','n_comercial', 'concent', 'present', 'lab', 'img', 'nro_caja'];

    public function stock(){
        return $this->hasMany('App\Models\Stock');
    }

    public function precio(){
        return $this->hasOne('App\Models\Precio');
    }

    public function detail(){
        return $this->hasMany('App\Models\Detail');
    }

    use HasFactory;
}
