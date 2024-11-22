@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Detalles de las Cisternas')

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
                            <h3 class="card-title">Detalles de la Cisterna</h3>
                        </div>

                        <div class="card-body">
                        
                            <div class="mb-3">
                                <p><strong>Marca: </strong>{{ $cisterna->marca }}</p>
                            </div>
                            
                            <div class="mb-3">
                                <p><strong>Modelo:</strong> {{ $cisterna->modelo }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Longitud:</strong> {{ $cisterna->longitud }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Pais Origen:</strong> {{ $cisterna->pais_origen }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Placa:</strong> {{ $cisterna->placa }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Material:</strong> {{ $cisterna->material }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Nro Chasis:</strong> {{ $cisterna->nro_chasis }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Capacidad:</strong> {{ $cisterna->capacidad }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Tipo de Carga:</strong> {{ $cisterna->tipo_carga }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha de fabricacion:</strong> {{ $cisterna->fecha_fabricacion }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Altura:</strong> {{ $cisterna->altura }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Anchura:</strong> {{ $cisterna->anchura }}</p>
                            </div>

                            <div class="mb-3">
                                <p><strong>Peso Vacio:</strong> {{ $cisterna->peso_vacio }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Peso Maximo:</strong> {{ $cisterna->peso_maximo }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Tipo de Combustion:</strong> {{ $cisterna->tipo_combustible }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha de Adquisicion:</strong> {{ $cisterna->fecha_adquisicion }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha de Desactivacion:</strong> {{ $cisterna->fecha_desactivacion }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Nro de Ejes:</strong> {{ $cisterna->nro_ejes }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Color:</strong> {{ $cisterna->color }}</p>
                            </div>
                        </div>

                        <div class="card-footer text-right">
                            <a href="{{ route('cisternas.index') }}" class="btn btn-secondary">Volver a la lista</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

