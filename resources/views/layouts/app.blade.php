<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Tu Tutor') | Tutorias Ya!</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link href="/css/inicio.css" rel="stylesheet">
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Pacifico" rel="stylesheet">
    

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
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/register') }}"><button class="btn">Registrarse</button></a></li>
                        <li><a href="{{ url('/login') }}"><button class="btn">Iniciar Sesión</button></a></li>
            
          </ul>

                    @else
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                        <li><a href="{{ url('/buscar') }}"><span class="glyphicon glyphicon-search"></span></a>
                        </li>
                        <li><a href="#">Mis Tutores<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left: 50px;">
                            <img src='/uploads/avatars/{{Auth::user()->avatar}}' style="width:32px; height:32px; position:absolute;; top:10px; left:10px; border-radius: 50%">
                                {{ Auth::user()->nombre }} <span class="caret"></span>
                            
                            
                    
                            </a>
                             
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/profile') }}">Perfil</span>
                            </a></li>
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
                    @endif
                </ul>
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