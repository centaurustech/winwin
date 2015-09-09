<!-- Cabecera MENU -->
<nav class="navbar navbar-default navbar-fixed-top nav-prop afix" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="page-scroll navbar-brand" href="/"><img src="../img/nav-logo.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse margin-top-05" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right menu nav-color">
                <li>
                    <a class="page-scroll" href="#page-top">Inicio</a>
                </li>
                <li>
                    <a class="page-scroll" href="#1">Cómo</a>
                </li>
                <li>
                    <a class="page-scroll" href="#2">Destacados</a>
                </li>
                <li>
                    <a class="page-scroll" href="#3">Partners</a>
                </li>
                <li>
                @unless(auth()->user())
                    <a class="page-scroll" href="{{ url('auth/register') }}">Registrar</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('auth/login') }}">Login</a>
                </li>
                @else
                    <li>
                    <a class="page-scroll" href="{{ url('auth/logout') }}">Cerrar Sesión</a>
                </li>
                @endunless
                <li>
                    <a class="page-scroll" href="{{ url('proyectos/create') }}">Crear Iniciativa</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('proyectos') }}">Lista de Iniciativas</a>
                </li>
                {{-- <li>
                    <a class="page-scroll" href="#4">Menú 4</a>
                </li> --}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

