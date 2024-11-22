@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Contratos')

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
                            @if ($reg->id) 
                                action="{{ route('contratos.update', $reg->id) }}"
                                @else action="{{ route('contratos.store') }}" 
                            @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select id="tipo" name="tipo" class="form-control" required>
                                        <option value="">Seleccione un tipo</option>
                                        <option value="cliente" {{ old('tipo', $reg->tipo) == 'cliente' ? 'selected' : '' }}>Cliente</option>
                                        <option value="proveedor" {{ old('tipo', $reg->tipo) == 'proveedor' ? 'selected' : '' }}>Proveedor</option>
                                    </select>
                                </div>

                                <div class="form-group" id="clientes-select" style="display: none;">
                                    <label>Clientes</label>
                                    <select class="form-control" name="user_id_cliente">
                                        <option value="" disabled selected>Seleccione un cliente</option>
                                        @foreach ($clientes as $registro)
                                        <option value="{{ $registro->id }}" {{ old('user_id', $reg->user_id) == $registro->id ? 'selected' : '' }}>{{ $registro->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group" id="proveedores-select" style="display: none;">
                                    <label>Proveedores</label>
                                    <select class="form-control" name="user_id_proveedor">
                                        <option value="" disabled selected>Seleccione un proveedor</option>
                                        @foreach ($proveedores as $registro)
                                        <option value="{{ $registro->id }}" {{ old('user_id', $reg->user_id) == $registro->id ? 'selected' : '' }}>{{ $registro->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre_contrato" value="{{ old('nombre_contrato', $reg->nombre_contrato) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" value="{{ old('fecha', $reg->fecha) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Inicio</label>
                                    <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', $reg->fecha_inicio) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Fin</label>
                                    <input type="date" name="fecha_fin" value="{{ old('fecha_fin', $reg->fecha_fin) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de Producto</label>
                                    <input type="text" name="tipo_producto" value="{{ old('tipo_producto', $reg->tipo_producto) }}"
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
                                
                                <div class="form-group">
                                    <label>Documento</label>
                                    <input type="file" name="documento" id="documento" class="form-control" >
                                </div>
                                
                                @if ($reg->documento)
                                    <p>
                                        <strong>Documento Actual:</strong>
                                        <a href="{{ asset('storage/' . $reg->documento) }}" target="_blank">Descargar Documento</a>
                                    </p>
                                @endif
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('contratos.index') }}">Cancelar</a>
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


@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tipoSelect = document.getElementById('tipo');
        
        tipoSelect.addEventListener('change', function() {
            var tipoSeleccionado = this.value;

            document.getElementById('clientes-select').style.display = 'none';
            document.getElementById('proveedores-select').style.display = 'none';

            if (tipoSeleccionado === 'cliente') {
                document.getElementById('clientes-select').style.display = 'block';
            } else if (tipoSeleccionado === 'proveedor') {
                document.getElementById('proveedores-select').style.display = 'block';
            }
        });

        // Para mostrar el campo correcto si ya se seleccionó un valor antes de cargar la página
        var tipoSeleccionado = tipoSelect.value;
        if (tipoSeleccionado === 'cliente') {
            document.getElementById('clientes-select').style.display = 'block';
            document.getElementsByName('user_id_cliente')[0].setAttribute('required', 'required');
        } else if (tipoSeleccionado === 'proveedor') {
            document.getElementById('proveedores-select').style.display = 'block';
            document.getElementsByName('user_id_proveedor')[0].setAttribute('required', 'required');
        }
    });

</script>
@endsection