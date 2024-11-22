@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Gastos')

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
                            <h3 class="card-title">Nuevo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form
                            @if ($reg->id) action="{{ route('gastos.update', $reg->id) }}"
                        @else action="{{ route('gastos.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                
                                
                                <div class="form-group">
                                    <label>Responsable</label>
                                    <select class="form-control" name="user_adm" required>
                                        @foreach ($administradores as $registro)
                                        <option value="{{$registro->id}}">{{$registro->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" value="{{ old('fecha', $reg->fecha) }}"
                                        class="form-control" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" name="descripcion" value="{{ old('descripcion', $reg->descripcion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Proveedores</label>
                                    <select class="form-control" name="user_prov" required>
                                        @foreach ($proveedores as $registro)
                                        <option value="{{$registro->id}}">{{$registro->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Monto</label>
                                    <input type="number" name="monto" value="{{ old('monto', $reg->monto) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select name="estado" class="form-control" required>
                                        <option value="">Selecciona un estado</option>
                                        <option value="registrado" {{ old('estado', $reg->estado) == 'registrado' ? 'selected' : '' }}>Registrado</option>
                                        <option value="en proceso" {{ old('estado', $reg->estado) == 'en proceso' ? 'selected' : '' }}>En proceso</option>
                                        <option value="aprobado" {{ old('estado', $reg->estado) == 'aprobado' ? 'selected' : '' }}>Aprobado</option>
                                        <option value="pendiente de pago" {{ old('estado', $reg->estado) == 'pendiente de pago' ? 'selected' : '' }}>Pendiente de pago</option>
                                        <option value="pagado" {{ old('estado', $reg->estado) == 'pagado' ? 'selected' : '' }}>Pagado</option>
                                        <option value="confirmado" {{ old('estado', $reg->estado) == 'confirmado' ? 'selected' : '' }}>Confirmado</option>
                                        <option value="archivado" {{ old('estado', $reg->estado) == 'archivado' ? 'selected' : '' }}>Archivado</option>
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('gastos.index') }}">Cancelar</a>
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
