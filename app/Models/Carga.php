<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_glp', 'origen', 'fecha_actual', 'fecha_salida', 'fecha_recogida', 'tasa_transporte', 'descarga', 'reembolso', 'detencion', 'escala', 'otros_cargos', 'tarifa_total', 'peso', 'volumen', 'user_cli', 'contrato_id', 'destino_id', 'cisterna_id', 'user_cho'
    ];


    public function destino(){
        return $this->belongsTo(Destino::class);
    }

    public function cisterna(){
        return $this->belongsTo(Cisterna::class);
    }

    public function cliente(){
        return $this->belongsTo(User::class, 'user_cli');
    }

    public function chofer(){
        return $this->belongsTo(User::class, 'user_cho');
    }

    public function contrato(){
        return $this->belongsTo(Contrato::class);
    }

}
