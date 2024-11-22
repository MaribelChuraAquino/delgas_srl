<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_adm', 'fecha', 'descripcion', 'user_prov', 'monto', 'estado'
    ];
    
    public function administrador(){
        return $this->belongsTo(User::class, 'user_adm');
    }

    public function proveedor(){
        return $this->belongsTo(User::class, 'user_prov');
    }

}
