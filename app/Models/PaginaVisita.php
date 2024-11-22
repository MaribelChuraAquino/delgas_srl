<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaginaVisita extends Model
{
    use HasFactory;

    // Especifica que los campos que pueden ser asignados masivamente son 'page_name' y 'visits'
    protected $fillable = ['nombre_pagina', 'visitas'];

    // Si no usas timestamps, puedes desactivarlos
    public $timestamps = true;
}
