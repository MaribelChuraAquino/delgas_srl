@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Detalles de los Destinos')

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
                            <h3 class="card-title">Detalles del Destino</h3>
                        </div>

                        <div class="card-body">
                        
                            <div class="mb-3">
                                <p><strong>Nombre: </strong>{{ $destino->nombre }}</p>
                            </div>
                            
                            <div class="mb-3">
                                <p><strong>Direccion:</strong> {{ $destino->direccion }}</p>
                            </div>

                            <div class="mb-3">
                                <p><strong>Latitud:</strong> {{ $destino->latitud }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Longitud:</strong> {{ $destino->longitud }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Tipo de Destino:</strong> {{ $destino->tipo_destino }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Contacto:</strong> {{ $destino->contacto }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Correo:</strong> {{ $destino->correo }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Estado:</strong> {{ $destino->estado }}</p>
                            </div>
                           
                        </div>

                        <div class="card-footer text-right">
                            <a href="{{ route('destinos.index') }}" class="btn btn-secondary">Volver a la lista</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

