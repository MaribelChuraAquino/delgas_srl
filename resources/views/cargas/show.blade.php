@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Detalles de las Cargas')

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
                            <h3 class="card-title">Detalles de la Carga</h3>
                        </div>

                        <div class="card-body">
                        
                            <div class="mb-3">
                                <p><strong>Tipo Glp: </strong>{{ $carga->tipo_glp }}</p>
                            </div>
                            
                            <div class="mb-3">
                                <p><strong>Origen:</strong> {{ $carga->origen }}</p>
                            </div>
                           
                            <div class="mb-3">
                                <p><strong>Fecha Actual:</strong> {{ $carga->fecha_actual }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha de Salida:</strong> {{ $carga->fecha_salida }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Fecha de Recogida:</strong> {{ $carga->fecha_recogida }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Tasa Transporte:</strong> {{ $carga->tasa_transporte }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Descarga:</strong> {{ $carga->descarga }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Reembolso:</strong> {{ $carga->reembolso }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Detencion:</strong> {{ $carga->detencion }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Escala:</strong> {{ $carga->escala }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Otros Cargos:</strong> {{ $carga->otros_cargos }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Tarifa Total:</strong> {{ $carga->tarifa_total }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Peso:</strong> {{ $carga->peso }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Volumen:</strong> {{ $carga->volumen }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Cliente:</strong> {{ $carga->cliente->name }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Contrato:</strong> {{ $carga->contrato->nombre_contrato }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Destino:</strong> {{ $carga->destino->nombre }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Cisterna:</strong> {{ $carga->cisterna->marca }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Chofer:</strong> {{ $carga->chofer->name }}</p>
                            </div>

                        </div>

                        <div class="card-footer text-right">
                            <a href="{{ route('cargas.index') }}" class="btn btn-secondary">Volver a la lista</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

