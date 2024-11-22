@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Cargas')

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
                            @if ($reg->id) action="{{ route('cargas.update', $reg->id) }}"
                        @else action="{{ route('cargas.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tipo GLP</label>
                                    <input type="text" name="tipo_glp" value="{{ old('tipo_glp', $reg->tipo_glp) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Origen</label>
                                    <input type="text" name="origen" value="{{ old('origen', $reg->origen) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Fecha Actual</label>
                                    <input type="date" name="fecha_actual" value="{{ old('fecha_actual', $reg->fecha_actual) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Salida</label>
                                    <input type="date" name="fecha_salida" value="{{ old('fecha_salida', $reg->fecha_salida) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Recogida</label>
                                    <input type="date" name="fecha_recogida" value="{{ old('fecha_recogida', $reg->fecha_recogida) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tasa Transporte</label>
                                    <input type="number" name="tasa_transporte" value="{{ old('tasa_transporte', $reg->tasa_transporte) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Descarga</label>
                                    <input type="number" name="descarga" value="{{ old('descarga', $reg->descarga) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Reembolso</label>
                                    <input type="number" name="reembolso" value="{{ old('reembolso', $reg->reembolso) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Detención</label>
                                    <input type="number" name="detencion" value="{{ old('detencion', $reg->detencion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Escala</label>
                                    <input type="text" name="escala" value="{{ old('escala', $reg->escala) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Otros Cargos</label>
                                    <input type="text" name="otros_cargos" value="{{ old('otros_cargos', $reg->otros_cargos) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tarifa Total</label>
                                    <input type="number" name="tarifa_total" value="{{ old('tarifa_total', $reg->tarifa_total) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Peso</label>
                                    <input type="number" name="peso" value="{{ old('peso', $reg->peso) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Volumen</label>
                                    <input type="text" name="volumen" value="{{ old('volumen', $reg->volumen) }}"
                                        class="form-control" placeholder="" required>
                                </div>

                                <div class="form-group">
                                    <label>Clientes</label>
                                    <select class="form-control" name="user_cli" required id="clientes">
                                        <option value="">Seleccione un cliente</option>
                                        @foreach ($clientes as $registro)
                                            <option value="{{$registro->id}}" {{ $registro->id == $reg->user_cli ? 'selected' : '' }}>
                                                {{$registro->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Contratos</label>
                                    <select class="form-control" name="contrato_id" required id="contratos">
                                        <option value="">Seleccione un contrato</option>
                                        @foreach ($clientes as $registro)
                                            @if ($registro->id == $reg->user_cli)  <!-- Solo mostrar los contratos del cliente seleccionado -->
                                                @foreach ($registro->contratos as $contrato)
                                                    <option value="{{$contrato->id}}" {{ $contrato->id == $reg->contrato_id ? 'selected' : '' }}>
                                                        {{$contrato->nombre_contrato}}
                                                    </option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label >Destinos</label>
                                    <select class="form-control" name="destino_id" required id="destinos">
                                        <option value="">Seleccione un destino</option>
                                        @foreach ($clientes as $registro)
                                            @if ($registro->id == $reg->user_cli) <!-- Solo mostrar los destinos para el cliente seleccionado -->
                                                @foreach ($registro->contratos as $contrato)
                                                    @if ($contrato->id == $reg->contrato_id) <!-- Solo mostrar los destinos del contrato seleccionado -->
                                                        @foreach ($contrato->destinos as $destino)
                                                            <option value="{{$destino->id}}" {{ $destino->id == $reg->destino_id ? 'selected' : '' }}>
                                                                {{$destino->nombre}}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                </div>



                                <div class="form-group">
                                    <label for="cisterna_id">Cisternas</label>
                                    <select class="form-control" name="cisterna_id" required>
                                        @foreach ($cisternas as $registro)
                                        <option value="{{$registro->id}}">{{$registro->marca}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Choferes</label>
                                    <select class="form-control" name="user_cho" required>
                                        @foreach ($choferes as $registro)
                                        <option value="{{$registro->id}}">{{$registro->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('cargas.index') }}">Cancelar</a>
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
  
  const contratosPorCliente = @json($clientes->mapWithKeys(function($cliente) {
    return [$cliente->id => $cliente->contratos->where('estado', 'activo')];
}));

document.getElementById('clientes').addEventListener('change', function() {
    const clienteId = this.value;
    const contratosSelect = document.getElementById('contratos');
    contratosSelect.innerHTML = '<option value="">Seleccione un contrato</option>';

    if (contratosPorCliente[clienteId]) {
        contratosPorCliente[clienteId].forEach(contract => {
            contratosSelect.innerHTML += `<option value="${contract.id}">${contract.nombre_contrato}</option>`;
        });
    }
    
    // Resetear destinos
    const destinosSelect = document.getElementById('destinos');
    destinosSelect.innerHTML = '<option value="">Seleccione un destino</option>';
});

document.getElementById('contratos').addEventListener('change', function() {
    const contratoId = this.value;
    const destinosSelect = document.getElementById('destinos');
    destinosSelect.innerHTML = '<option value="">Seleccione un destino</option>';

    const clienteId = document.getElementById('clientes').value;

    if (contratosPorCliente[clienteId]) {
        const contrato = contratosPorCliente[clienteId].find(contract => contract.id == contratoId);
        if (contrato && contrato.destinos) {
            contrato.destinos.forEach(destino => {
                destinosSelect.innerHTML += `<option value="${destino.id}">${destino.nombre}</option>`;
            });
        }
    }
});


</script>

@endsection
