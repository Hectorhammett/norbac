<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head any other head content must come *after* these tags -->
    <title>Norbac | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"/>


    @yield('css')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @yield('modal')
    <div id="background-image">
    </div>
    <nav class="navbar navbar-default" id="main-navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="toggle-button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}" id="logo-holder"><img src="{{ asset('img/logo_white_small.png') }}" class="img-responsive"/></a>
                    </div>
                </div>
                <div class="col-sm-8 text-center hidden-xs" id="main-title-holder">
                    <h1 id="main-title">Biorelleno Sanitario</h1>
                </div>
            </div>
            <!--  -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right blue-nav visible-xs">
                    <li><a href="{{ url('/quienes-somos') }}">¿Quiénes somos?</a></li>
                    <li><a href="{{ url('/vision') }}">Visión</a></li>
                    <li><a href="{{ url('/mision') }}">Misión</a></li>
                    <li><a href="{{ url('/valores') }}">Valores</a></li>
                    <li><a href="{{ url('/manejo-integral') }}">Manejo de Residuos</a></li>
                    <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                    <li><a href="{{ url('/otras-actividades') }}">Otras Actividades</a></li>
                    <li><a href="{{ url('/paginas-de-interes') }}">Páginas de Interés</a></li>
                    <li><a href="{{ url('/estadisticas') }}">Estadísticas</a></li>
                    <li><a href="{{ url('/galeria') }}">Galería</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Starts main page -->
    <div class="container main-container">
        <div class="row tab-holder hidden-xs">
            @include('tabs')
        </div>
        <div class="row main-row">
            <div class="col-sm-12">
                @yield('mainContent')
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bg.js') }}"></script>
    @yield('scripts')
  </body>
</html>