@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <!-- Tarjetas unificadas y compactas -->
    <div class="row text-center">
        <!-- Tarjeta Roles -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm bg-dark text-white h-100">
                <div class="card-body p-3">
                    <i class="fas fa-cogs fa-2x mb-2"></i>
                    <h5 class="card-title">Roles Registrados</h5>
                    <h4>{{ $totalRoles ?? 0 }}</h4> <!-- Número de roles -->
                    <p class="card-text">Gestiona los roles del sistema.</p>
                    <a href="{{ route('roles.index') }}" class="btn btn-outline-light btn-sm">Ir a Roles</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Usuarios -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm bg-success text-white h-100">
                <div class="card-body p-3">
                    <i class="fas fa-users fa-2x mb-2"></i>
                    <h5 class="card-title">Usuarios Registrados</h5>
                    <h4>{{ $totalUsuarios ?? 0 }}</h4> <!-- Número de usuarios -->
                    <p class="card-text">Gestiona los usuarios del sistema.</p>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-outline-light btn-sm">Ir a Usuarios</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Cisternas -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm bg-primary text-white h-100">
                <div class="card-body p-3">
                    <i class="fas fa-truck fa-2x mb-2"></i>
                    <h5 class="card-title">Total Cisternas</h5>
                    <h4>{{ $totalCisternas ?? 0 }}</h4> <!-- Número de cisternas -->
                    <p class="card-text">Gestiona las cisternas del sistema.</p>
                    <a href="{{ route('cisternas.index') }}" class="btn btn-outline-light btn-sm">Ir a Cisternas</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Destinos -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm bg-secondary text-white h-100">
                <div class="card-body p-3">
                    <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
                    <h5 class="card-title">Total Destinos</h5>
                    <h4>{{ $totalDestinos ?? 0 }}</h4> <!-- Número de destinos -->
                    <p class="card-text">Gestiona los destinos del sistema.</p>
                    <a href="{{ route('destinos.index') }}" class="btn btn-outline-light btn-sm">Ir a Destinos</a>
                </div>
            </div>
        </div>

        
    </div>

    <div class="row text-center">
        <!-- Tarjeta Cargas -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm bg-warning text-dark h-100">
                <div class="card-body p-3">
                    <i class="fas fa-box fa-2x mb-2"></i>
                    <h5 class="card-title">Total Cargas</h5>
                    <h4>{{ $totalCargas ?? 0 }}</h4> <!-- Número de cargas -->
                    <p class="card-text">Gestiona las cargas del sistema.</p>
                    <a href="{{ route('cargas.index') }}" class="btn btn-outline-dark btn-sm">Ir a Cargas</a>
                </div>
            </div>
        </div>
        <!-- Tarjeta Gastos -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm bg-danger text-white h-100">
                <div class="card-body p-3">
                    <i class="fas fa-money-bill-wave fa-2x mb-2"></i>
                    <h5 class="card-title">Total Gastos</h5>
                    <h4>{{ $totalGastos ?? 0 }}</h4> <!-- Número de gastos -->
                    <p class="card-text">Gestiona los gastos registrados.</p>
                    <a href="{{ route('gastos.index') }}" class="btn btn-outline-light btn-sm">Ir a Gastos</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta Contratos -->
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm bg-info text-white h-100">
                <div class="card-body p-3">
                    <i class="fas fa-file-contract fa-2x mb-2"></i>
                    <h5 class="card-title">Total Contratos</h5>
                    <h4>{{ $totalContratos ?? 0 }}</h4> <!-- Número de contratos -->
                    <p class="card-text">Gestiona los contratos del sistema.</p>
                    <a href="{{ route('contratos.index') }}" class="btn btn-outline-light btn-sm">Ir a Contratos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
