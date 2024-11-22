@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Detalles de los Usuarios')

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
                            <h3 class="card-title">Detalles del Usuario</h3>
                        </div>

                        <div class="card-body">        
                            <div class="mb-3">
                                <p><strong>Nombre: </strong>{{ $user->name }}</p>
                            </div>

                            @if ($user->tipo == 'cliente' || $user->tipo == 'proveedor')
                                <div class="mb-3">
                                    <p><strong>Empresa:</strong> {{ $user->empresa }}</p>
                                </div>
                            @endif
                            
                            <div class="mb-3">
                                <p><strong>Telefono:</strong> {{ $user->telefono }}</p>
                            </div>


                            <div class="mb-3">
                                <p><strong>Email:</strong> {{ $user->email }}</p>
                            </div>
                            <div class="mb-3">
                                <p><strong>Tipo:</strong> {{ $user->tipo }}</p>
                            </div>

                            

                            @if($user->tipo == 'chofer')
                                <div class="mb-3">
                                    <p><strong>Licencia:</strong> {{ $user->licencia }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><strong>Expiracion de Licencia:</strong> {{ $user->licencia_exp }}</p>
                                </div>
                            @endif

                            @if($user->tipo == 'cliente')
                                <div class="mb-3">
                                    <p><strong>Direccion:</strong> {{ $user->direccion }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><strong>Ciudad:</strong> {{ $user->ciudad }}</p>
                                </div>
                                <div class="mb-3">
                                    <p><strong>Pais:</strong> {{ $user->pais }}</p>
                                </div>
                            @endif
                           
                        </div>

                        <div class="card-footer text-right">
                            <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver a la lista</a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

<script>
    </script>