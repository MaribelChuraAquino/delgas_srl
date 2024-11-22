<style>
    .navbar-white {
    background-color: #dbe8ee; /* Color de fondo deseado */
    }
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a> 
            {{-- <div class="navbar-search-block">
                <form action="{{ route('buscar.resultado') }}" method="GET" class="form-inline">
                    @csrf
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" name="texto" placeholder="Search"
                            aria-label="Search" required>
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div> --}}
        </li>




        <li>
            <div class="theme-selector mt-2">
                <button class="theme-button btn btn-primary btn-sm" id="themeSelector">Tema</button>
                <div class="theme-options" id="themeOptions" style="">
                    <div class="theme-option" data-theme="niños">
                        <div class="theme-icon">🎈</div>
                        <div class="theme-info">
                            <div class="theme-name">Niños</div>
                            <!-- <div class="theme-desc">Diseño colorido y divertido</div> -->
                        </div>
                    </div>
                    <div class="theme-option" data-theme="jovenes">
                        <div class="theme-icon">🎧</div>
                        <div class="theme-info">
                            <div class="theme-name">Jóvenes</div>
                            <!-- <div class="theme-desc">Estilo moderno y dinámico</div> -->
                        </div>
                    </div>
                    <div class="theme-option" data-theme="adultos">
                        <div class="theme-icon">👔</div>
                        <div class="theme-info">
                            <div class="theme-name">Adultos</div>
                            <!-- <div class="theme-desc">Diseño profesional</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>

        <!-- Messages Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li> --}}
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <a href="#" class="dropdown-item">Logout</a> --}}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
</nav>



<style>
    .theme-selector {
    position: relative;
    width: 120px;
    font-family: Arial, sans-serif;
    }

    .theme-button {
        width: 100%;
      
        background: linear-gradient(145deg, #007bff, #6610f2);
        border: none;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .theme-button:hover {
        background: linear-gradient(145deg, #c81ee5, #1565c0);
        transform: translateY(-1px);
    }

    .theme-button::after {
        content: '▼';
        font-size: 10px;
        transition: transform 0.3s ease;
    }

    .theme-button.active::after {
        transform: rotate(180deg);
    }

    .theme-options {
    position: absolute;
    top: 110%;
    left: 0;
    width: 100%;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    z-index: 100;
    }

    .theme-options.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }



    .theme-option {
        padding: 12px 15px;
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .theme-option:hover {
        background: #f5f5f5;
    }

    .theme-option:first-child {
        border-radius: 8px 8px 0 0;
    }

    .theme-option:last-child {
        border-radius: 0 0 8px 8px;
    }

    .theme-icon {
        font-size: 20px;
    }

    .theme-info {
        flex: 1;
    }

    .theme-name {
        font-size: 14px;
        color: #333;
        margin-bottom: 2px;
    }

    .theme-desc {
        font-size: 11px;
        color: #666;
    }

    .theme-option.selected {
        background: #e3f2fd;
    }

    .theme-option.selected .theme-name {
        color: #1976d2;
        font-weight: 500;
    }

</style>