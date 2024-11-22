<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'direccion', 'latitud', 'longitud', 'tipo_destino', 'contacto', 'correo', 'estado', 'contrato_id'
    ];

    public function cargas(){
        return $this->hasMany(Carga::class);
    }

    public function contrato(){
        return $this->belongsTo(Contrato::class);
    }
}
