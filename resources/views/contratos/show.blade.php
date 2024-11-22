@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Detalles del Contrato')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- start card -->
                    <div class="card" style="text-align: center;">
                        <div class="card-header">
                            <h3 class="card-title">Detalles del Contrato</h3>
                        </div>

                        <div class="card-body">
                        
                            <div class="mb-3">
                                <p><strong>Tipo:</strong> <span class="badge badge-primary">{{ $contrato->tipo }}</span></p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Nombre de Usuario:</strong> <span class="text-success">{{ $contrato->user->name }}</span></p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Nombre del Contrato:</strong> {{ $contrato->nombre_contrato }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha:</strong> {{ $contrato->fecha }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha de Inicio:</strong> {{ $contrato->fecha_inicio }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha de Fin:</strong> {{ $contrato->fecha_fin }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Tipo de Producto:</strong> <span class="badge badge-secondary">{{ $contrato->tipo_producto }}</span></p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Estado:</strong> <span class="badge badge-secondary">{{ $contrato->estado }}</span></p>
                            </div>
                            <div class="mb-3">
                                <strong>Documento:</strong>
                                @if ($contrato->documento)
                                    <a href="{{ asset('storage/' . $contrato->documento) }}" target="_blank" class="btn btn-link">Ver Documento</a>
                                @else
                                    <span class="text-danger">No hay documento</span>
                                @endif
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <a href="{{ route('contratos.index') }}" class="btn btn-secondary">Volver a la lista</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

