<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo', 'user_id', 'nombre_contrato', 'fecha', 'fecha_inicio', 'fecha_fin', 'tipo_producto', 'estado', 'documento'
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function destinos(){
        return $this->hasMany(Destino::class);
    }

    public function cliente(){
        return $this->belongsTo(User::class, 'user_cli');
    }

    public function proveedor(){
        return $this->belongsTo(User::class, 'user_prov');
    }

}
