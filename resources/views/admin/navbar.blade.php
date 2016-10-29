<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Tu Tutor') | Panel de administracion</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link href="/css/inicio.css" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Pacifico" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    TutoriasYa!
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav"> 
                    &nbsp;
                    <li><a href="/admin/usuarios">Usuarios</a></li>
                    <li><a href="/admin/materias">Materias</a></li>
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                    <!-- Authentication Links -->
                    @if (!Auth::guest())
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->session }}{{ Auth::user()->nombre }} <span class="caret"></span>


                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}">Perfil</a></li>
                            <li><a href="#">Mis Tutorias</a></li>
                            <li><a href="#">Mensajes Privados</a></li>
                            <li><a href="#">Configuración</a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Salir
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            </ul>
                            </li>
                            </ul>
                </ul>
                        @else
                            <li><a href="{{ url('/register') }}">Registrarse</a></li>
                </ul>
                        @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <br/>
        <footer>
            <div style="position:bottom; background-color:black">
                <br/>
                <center><font color="white"><div id="copyright text-right">© Copyright 2016 TutoriasYa! UNAJ</div></font></center>
                <br/>
                <br/>
                <br/>
                <br/>
            </div>
        </footer>
    </body>
    
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('scripts')
</html>