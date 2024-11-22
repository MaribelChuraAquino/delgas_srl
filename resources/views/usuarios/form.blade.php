@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Usuarios')

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
                                action="{{ route('usuarios.update', $reg->id) }}"
                            @else 
                                action="{{ route('usuarios.store') }}" 
                            @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="rol_id">Tipo</label>
                                    <select class="form-control" name="rol_id" id="tipo" required>
                                        @foreach ($roles as $registro)
                                        <option 
                                            value="{{ $registro->id }}" 
                                            data-tipo="{{ $registro->nombre }}"
                                            @if($registro->id == old('rol_id', $reg->rol_id)) selected @endif>
                                            {{ $registro->nombre }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" id="name" name="name" value="{{ old('name', $reg->name) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group" id="empresa-select" style="display: none;">
                                    <label>Empresa</label>
                                    <input type="text" name="empresa" value="{{ old('empresa', $reg->empresa) }}"
                                        class="form-control" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label for="telefono">Telefono</label>
                                    <input type="number" id="telefono" name="telefono" value="{{ old('telefono', $reg->telefono) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="email" name="email" value="{{ old('email', $reg->email) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" value=""
                                        class="form-control" placeholder="" required>
                                </div>
                                
                               
                                <div class="form-group" id="chofer-licencia" style="display: none;">
                                    <label>Licencia</label>
                                    <input type="number" name="licencia" value="{{ old('licencia', $reg->licencia) }}"
                                        class="form-control" placeholder="" >
                                </div>
                                <div class="form-group" id="chofer-ven_licencia" style="display: none;">
                                    <label>Vencimiento Licencia</label>
                                    <input type="date" name="licencia_exp" value="{{ old('licencia_exp', $reg->licencia_exp) }}"
                                        class="form-control" placeholder="" >
                                </div>
                                <div class="form-group" id="cliente-direccion" style="display: none;">
                                    <label>Direccion</label>
                                    <input type="text" name="direccion" value="{{ old('direccion', $reg->direccion) }}"
                                        class="form-control" placeholder="" >
                                </div>
                                <div class="form-group" id="cliente-ciudad" style="display: none;">
                                    <label>Ciudad</label>
                                    <input type="text" name="ciudad" value="{{ old('ciudad', $reg->ciudad) }}"
                                        class="form-control" placeholder="" >
                                </div>
                                <div class="form-group" id="cliente-pais" style="display: none;">
                                    <label>Pais</label>
                                    <input type="text" name="pais" value="{{ old('pais', $reg->pais) }}"
                                        class="form-control" placeholder="" >
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('usuarios.index') }}">Cancelar</a>
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

    // Función para mostrar/ocultar campos
    function mostrarCamposSegunTipo() {
        var tipoSeleccionado = tipoSelect.options[tipoSelect.selectedIndex].dataset.tipo;
        console.log("Tipo seleccionado:", tipoSeleccionado);

        // Ocultar todos los campos antes de aplicar la lógica
        document.getElementById('empresa-select').style.display = 'none';
        document.getElementById('chofer-licencia').style.display = 'none';
        document.getElementById('chofer-ven_licencia').style.display = 'none';
        document.getElementById('cliente-direccion').style.display = 'none';
        document.getElementById('cliente-ciudad').style.display = 'none';
        document.getElementById('cliente-pais').style.display = 'none';

        // Mostrar el campo adecuado según el tipo seleccionado
        if (tipoSeleccionado === 'proveedor') {
            document.getElementById('empresa-select').style.display = 'block';
        } else if (tipoSeleccionado === 'chofer') {
            document.getElementById('chofer-licencia').style.display = 'block';
            document.getElementById('chofer-ven_licencia').style.display = 'block';
        } else if (tipoSeleccionado === 'cliente') {
            document.getElementById('cliente-direccion').style.display = 'block';
            document.getElementById('cliente-ciudad').style.display = 'block';
            document.getElementById('cliente-pais').style.display = 'block';
            document.getElementById('empresa-select').style.display = 'block';
        }
    }

    // Ejecutar la función cuando cambie el tipo seleccionado
    tipoSelect.addEventListener('change', mostrarCamposSegunTipo);

    // Ejecutar la función al cargar la página para que el formulario de edición tenga los campos correctamente mostrados
    mostrarCamposSegunTipo();
});


</script>
@endsection