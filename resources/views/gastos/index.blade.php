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
                <div class="col-md-12">

                    @if (session('info'))
                        <div class="alert alert-{{ session('info.afirmacion') }}">
                            {{ session('info.mensaje') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registros</h3>
                            @if (auth()->user()->tipo == 'administrador')
                                <a class="btn btn-success btn-sm float-right" href="{{ route('gastos.create') }}">Crear Gasto</a>
                            @endif
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-4">
                            
                            <!-- Formulario de búsqueda -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" id="searchInput" class="form-control" style="padding-left: 15px; padding-right: 15px;" placeholder="Buscar por descripcion..." aria-label="Buscar por nombre" aria-describedby="basic-addon1">
                            </div>


                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th style="width: 30px;">DESCRIPCION</th>
                                        <th style="width: 10%;">RESPONSABLE</th>
                                        <th style="width: 10%;">FECHA</th>
                                        <th style="width: 10%;">PROVEEDOR</th>
                                        <th style="width: 10%;">MONTO</th>
                                        <th style="width: 10%;">ESTADO</th>
                                        <th style="width: 15%; text-align: center;">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody id="gastosTableBody">
                                    @foreach ($registros as $reg)
                                    
                                        <tr>
                                            <td>{{ $reg->id }}</td>       
                                            <td>{{ $reg->descripcion }}</td>
                                            <td>{{ $reg->administrador->name }}</td>                     
                                            <td>{{ $reg->fecha }}</td>
                                            <td>{{ $reg->proveedor->name }}</td>
                                            <td>{{ $reg->monto }}</td>
                                            <td>
                                                @if($reg->estado == 'registrado')
                                                    <span class="badge badge-primary">Registrado</span>
                                                @elseif($reg->estado == 'en proceso')
                                                    <span class="badge badge-secondary">En proceso</span>
                                                @elseif($reg->estado == 'aprobado')
                                                    <span class="badge badge-info">Aprobado</span>
                                                @elseif($reg->estado == 'pendiente de pago')
                                                    <span class="badge badge-warning">Pendiente de pago</span>
                                                @elseif($reg->estado == 'pagado')
                                                    <span class="badge badge-success">Pagado</span>
                                                @elseif($reg->estado == 'confirmado')
                                                    <span class="badge badge-light">Confirmado</span>
                                                @else
                                                    <span class="badge badge-dark">Archivado</span>
                                                @endif
                                            </td>
                                            <td class="project-actions" style="text-align: center;">
                                                <a class="btn btn-info btn-sm" 
                                                    href="{{ route('gastos.show', $reg->id) }}">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                @if (auth()->user()->tipo == 'administrador')
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('gastos.edit', $reg->id) }}">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <form action="{{ route('gastos.destroy', $reg->id) }}" method="post"
                                                        style="display: inline">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- {{ $users->links() }} --}}
                        </div>
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
    document.getElementById('searchInput').addEventListener('input', function() {
        // Obtener el término de búsqueda
        const searchTerm = this.value.toLowerCase();  // Convertir a minúsculas para hacer la búsqueda insensible a mayúsculas

        // Obtener todas las filas de la tabla
        const rows = document.querySelectorAll('#gastosTableBody tr');

        // Iterar sobre las filas de la tabla
        rows.forEach(function(row) {
            const nameCell = row.querySelector('td:nth-child(2)');  // La columna de nombre es la segunda
            const name = nameCell.textContent.toLowerCase();  // Obtener el texto del nombre en minúsculas

            // Si el nombre contiene el término de búsqueda, mostrar la fila, de lo contrario, ocultarla
            if (name.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
</script>

@endsection