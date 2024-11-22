<style>
    .sidebar-light-primary {
    background-color: #c0cfd6; /* Color de fondo deseado */
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('template/dist/img/logo.jpg') }}" alt="Logo Image" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light marca">DELGAS S.R.L</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" >
            <div class="image">
                <img src="{{ asset('template/dist/img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <div href="#" class="d-block recibir">Bienvenido <span style="color: black; font-weight: bold;">{{ Auth::user()->name }}</span></div>
                <a href="#" class="d-block"> </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Dashboards</p>
                    </a>
                </li>

                @if (auth()->user()->tipo == 'administrador')
                    <li class="nav-item">
                        <a href="{{ route('roles.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Roles</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('usuarios.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cisternas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i>
                            <p>Cisternas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('destinos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>Destinos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cargas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Cargas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gastos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>Gastos</p>
                        </a>
                    </li>
                   
                    
                    <li class="nav-item">
                        <a href="{{ route('reportes.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-download"></i>
                            <p>Reportes</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('contratos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Contratos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('help.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>Help</p>
                        </a>
                    </li>
                    
                @elseif (auth()->user()->tipo == 'cliente')  
                    <li class="nav-item">
                        <a href="{{ route('contratos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Contratos</p>
                        </a>
                    </li>             
                    <li class="nav-item">
                        <a href="{{ route('destinos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-globe"></i>
                            <p>Destinos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cargas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Cargas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('help.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>Help</p>
                        </a>
                    </li>

                @elseif (auth()->user()->tipo == 'proveedor')
                    <li class="nav-item">
                        <a href="{{ route('contratos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Contratos</p>
                        </a>
                    </li>  
                    <li class="nav-item">
                        <a href="{{ route('gastos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>Gastos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('help.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>Help</p>
                        </a>
                    </li>

                @elseif (auth()->user()->tipo == 'chofer')
                    <li class="nav-item">
                        <a href="{{ route('reportes.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-download"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('help.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-question"></i>
                            <p>Help</p>
                        </a>
                    </li>

                @endif

            </ul>
        </nav>

            <!-- Controles de modo y tema fuera del menú -->
        <div class="theme-controls" style="position: absolute; bottom: 50px; left: 15px;">
                
            <div class="form-check form-switch d-flex align-items-center">
                <i class="fas fa-sun" id="iconDay" style="font-size: 20px;"></i> <!-- Icono de día -->
                <input class="form-check-input mx-3" type="checkbox" id="toggleMode" {{ session('mode') == 'night' ? 'checked' : '' }}>
                <i class="fas fa-moon" id="iconNight" style="font-size: 20px;"></i> <!-- Icono de noche -->
            </div>


        </div>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<script>
   // Modo Día/Noche
    const toggleMode = document.getElementById('toggleMode');
    const iconDay = document.getElementById('iconDay');
    const iconNight = document.getElementById('iconNight');
    const body = document.body;

    // Cargar el modo desde localStorage
    const mode = localStorage.getItem('mode') || 'day';
    if (mode === 'night') {
        body.classList.add('night-mode');
        iconDay.style.opacity = '0.5'; // Desactivar ícono de sol
        iconNight.style.opacity = '1';  // Activar ícono de luna
        toggleMode.checked = true;
    } else {
        iconDay.style.opacity = '1';   // Activar ícono de sol
        iconNight.style.opacity = '0.5'; // Desactivar ícono de luna
    }

    // Cambiar modo al hacer clic en el checkbox
    toggleMode.addEventListener('change', function() {
        if (this.checked) {
            body.classList.add('night-mode');
            iconDay.style.opacity = '0.5'; // Desactivar ícono de sol
            iconNight.style.opacity = '1';  // Activar ícono de luna
            localStorage.setItem('mode', 'night');
        } else {
            body.classList.remove('night-mode');
            iconDay.style.opacity = '1';   // Activar ícono de sol
            iconNight.style.opacity = '0.5'; // Desactivar ícono de luna
            localStorage.setItem('mode', 'day');
        }
    });

</script>


<style>
    /* Modo Noche General */
    .night-mode {
        background-color: #2c3e50; /* Fondo oscuro para todo el sitio */
        color: white;              /* Texto blanco */
    }

    /* Fondo del body (en general) */
    .night-mode body {
        background-color: #34495e;  /* Un fondo menos oscuro para que sea más cómodo */
        color: white;
    }

    /* Fondo del contenido principal (dashboard, tablas, formularios) */
    .night-mode .content-wrapper {
        background-color: #596d83; /* Fondo de la sección de contenido */
        color: white;
    }

    /* Fondo de tablas */
    .night-mode table {
        background-color: #678099; /* Fondo oscuro para tablas */
        color: white;
    }

    

    /* Fondo de formularios y entradas */
    .night-mode input, .night-mode select, .night-mode textarea {
        background-color: #678099; /* Fondo de formularios en modo noche */
        color: white;              /* Texto en blanco en los formularios */
        border: 1px solid #5f6c72; /* Bordes suaves */
    }

    
    /* Fondo de las tarjetas (si usas tarjetas en tu layout) */
    .night-mode .card {
        background-color: #596d83; /* Fondo de las tarjetas */
        color: white;
    }

    /* Estilo de los títulos (como h1, h2, etc.) */
    .night-mode h1, .night-mode h2, .night-mode h3, .night-mode h4, .night-mode h5, .night-mode h6 {
        color: white; /* Títulos en blanco */
    }

    /* Estilo de los enlaces */
    .night-mode a {
        color: #ecf0f1;  /* Color de los enlaces en modo noche */
    }

    .night-mode a:hover {
        color: #f39c12; /* Color al pasar el ratón sobre los enlaces */
    }

   

    /* Fondo del navbar */
    .night-mode .main-header {
        background-color: #596d83;
        color: white;
    }

    .night-mode .main-header .navbar-nav .nav-link {
        color: white !important;
    }

    /* Fondo del sidebar */
    .night-mode .main-sidebar {
        background-color: #3b4b5c;
    }

    .night-mode .nav-link {
        color: #ecf0f1 !important;
    }

    /* Fondo del pie de página */
    .night-mode footer {
        background-color: #3b4b5c;
        color: white;
    }

</style>


<style>
  /* Estilos para el contenedor y alineación */
    .form-check.form-switch {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px; /* Espacio entre el icono y el checkbox */
    }

    /* Estilos para el toggle */
    .form-check-input {
        width: 60px;
        height: 30px;
        background-color: #f0b90d;
        border-radius: 50px;
        position: relative;
        appearance: none;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    /* Estilo para el círculo que se mueve */
    .form-check-input:before {
        content: "";
        position: absolute;
        top: 3px;
        left: 3px;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: white;
        transition: left 0.3s ease, transform 0.2s ease;
    }

    /* Estilos cuando el checkbox está activado */
    .form-check-input:checked {
        background: linear-gradient(135deg, #ff9f00, #ff5e00); /* Gradiente dinámico */
    }

    .form-check-input:checked:before {
        left: 33px;
        transform: scale(1.1); /* Añadir un pequeño zoom para el efecto de transición */
    }



    /* Efecto de color para el icono de día (sol) */
    #iconDay {
        color: #ffcc00;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    /* Efecto de color para el icono de noche (luna) */
    #iconNight {
        color: #4b4b4b;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    /* Desactivar el icono de noche cuando está en modo día */
    #iconNight {
        opacity: 0.5;
    }

    /* Activar el icono de noche cuando se activa el checkbox */
    .form-check-input:checked + .fas#iconNight {
        opacity: 1;
        transform: scale(1.2); /* Aumenta el tamaño del ícono de la luna */
        color: #4a90e2; /* Azul suave para la luna */
    }

    /* Activar el icono de día cuando está en modo día */
    .form-check-input:checked + .fas#iconDay {
        opacity: 0.5;
        transform: scale(0.9); /* Reduce un poco el tamaño del ícono del sol */
        color: #f3a923; /* Naranja cálido para el sol */
    }

    /* Hover sobre el checkbox */
    .form-check-input:hover {
        background: linear-gradient(135deg, #ff9f00, #ffb830); /* Gradiente con un cambio al hacer hover */
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    /* Hover sobre los iconos */
    .fas:hover {
        transform: scale(1.2); /* Aumentar un poco el tamaño de los íconos al pasar el cursor */
        color: #fdb813; /* Color cálido para los íconos al hacer hover */
    }

</style>
