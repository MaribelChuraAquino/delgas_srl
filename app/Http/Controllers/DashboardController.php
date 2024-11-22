<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Models\User;
use App\Models\Carga;
use App\Models\Cisterna;
use App\Models\Contrato;
use App\Models\Destino;
use App\Models\Gasto;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRoles = Rol::count();
        $totalUsuarios = User::count();
        $totalCisternas = Cisterna::count();
        $totalDestinos = Destino::count();
        $totalCargas = Carga::count();
        $totalGastos = Gasto::sum('monto'); // Ejemplo para sumar los gastos
        $totalContratos = Contrato::count();

        // Pasar estos valores a la vista
        return view('dashboard.index', compact('totalRoles', 'totalUsuarios', 'totalCisternas', 'totalDestinos', 'totalCargas', 'totalGastos', 'totalContratos'));
    }
}