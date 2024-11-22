@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Detalles de los Gastos')

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
                            <h3 class="card-title">Detalles del Gasto</h3>
                        </div>

                        <div class="card-body">
                        
                            <div class="mb-3">
                                <p><strong>Responsable: </strong>{{ $gasto->administrador->name }}</p>
                            </div>
                            
                            <div class="mb-3">
                                <p><strong>Fecha:</strong> {{ $gasto->fecha }}</p>
                            </div>

                            <div class="mb-3">
                                <p><strong>Descripcion:</strong> {{ $gasto->descripcion }}</p>
                            </div>

                            <div class="mb-3">
                                <p><strong>Proveedor:</strong> {{ $gasto->proveedor->name }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Monto:</strong> {{ $gasto->monto }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Estado:</strong> {{ $gasto->estado }}</p>
                            </div>
                           
                        </div>

                        <div class="card-footer text-right">
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Volver a la lista</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

