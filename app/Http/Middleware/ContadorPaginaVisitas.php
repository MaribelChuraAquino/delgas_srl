<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\PaginaVisita;
use Illuminate\Http\Request;

class ContadorPaginaVisitas
{
    public function handle(Request $request, Closure $next)
    {
        // Intentamos obtener el nombre de la ruta
        $pageName = $request->route() ? $request->route()->getName() : $request->path();

        // Si la página ya tiene un registro, incrementa el contador de visitas
        $pageVisit = PaginaVisita::firstOrCreate(['nombre_pagina' => $pageName]);
        $pageVisit->increment('visitas');

        // Continúa con la solicitud
        return $next($request);
    }
}
