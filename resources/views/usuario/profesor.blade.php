
<div class="col-md-8">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <b><i>@yield('tipo', 'Tu Tutor')</i></b>

        </div>
        
        <div class="panel-body">
            <div class="col-md-3">


                @section('avatar')
                </div>
                <div class="col-md-7">
                <h4>@yield('nombre', 'Tu Tutor') @yield('apellido', 'Tu Tutor')</h4>

                 @yield('email', 'Tu Tutor')<br/>  

            </div>
            <div class="col-md-2">
                Mapa<br/><br/><br/><br/>
                Puntaje
            </div>
        </div>
    </div>
</div>
