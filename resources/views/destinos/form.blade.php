@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Destinos')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card {{ $reg->id ? 'card-primary' : 'card-success' }}">
                        <div class="card-header">
                            <h3 class="card-title">{{ $reg->id ? 'Editar' : 'Nuevo' }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form
                            @if ($reg->id) action="{{ route('destinos.update', $reg->id) }}"
                        @else action="{{ route('destinos.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Contrato</label>
                                    <select class="form-control" name="contrato_id" required>
                                        @foreach ($contratos as $registro)
                                        <option value="{{$registro->id}}">{{$registro->nombre_contrato}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" value="{{ old('nombre', $reg->nombre) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Direccion</label>
                                    <input type="text" name="direccion" value="{{ old('direccion', $reg->direccion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Latitud</label>
                                    <input type="text" name="latitud" value="{{ old('latitud', $reg->latitud) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Longitud</label>
                                    <input type="text" name="longitud" value="{{ old('longitud', $reg->longitud) }}"
                                        class="form-control" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label>Tipo de Destino</label>
                                    <select name="tipo_destino" class="form-control" required>
                                        <option value="">Selecciona un destino</option>
                                        <option value="Estacion de Servicio" {{ old('tipo_destino', $reg->tipo_destino) == 'Estacion de Servicio' ? 'selected' : '' }}>Estación de Servicio</option>
                                        <option value="Planta Industrial" {{ old('tipo_destino', $reg->tipo_destino) == 'Planta Industrial' ? 'selected' : '' }}>Planta Industrial</option>
                                        <option value="Ditribuidora de Gas" {{ old('tipo_destino', $reg->tipo_destino) == 'Ditribuidora de Gas' ? 'selected' : '' }}>Distribuidora de Gas</option>
                                    </select>
                                </div>

                                
                                <div class="form-group">
                                    <label>Contacto</label>
                                    <input type="text" name="contacto" value="{{ old('contacto', $reg->contacto) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="text" name="correo" value="{{ old('correo', $reg->correo) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select name="estado" class="form-control" required>
                                        <option value="">Selecciona un estado</option>
                                        <option value="activo" {{ old('estado', $reg->estado) == 'activo' ? 'selected' : '' }}>Activo</option>
                                        <option value="inactivo" {{ old('estado', $reg->estado) == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                                    </select>
                                </div>


                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('destinos.index') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
