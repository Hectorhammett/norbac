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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
                        <a class="navbar-brand" href="#" id="logo-holder"><img src="{{ asset('img/logo_white_small.png') }}" class="img-responsive"/></a>
                    </div>
                </div>
                <div class="col-sm-8 text-center hidden-xs" id="main-title-holder">
                    <h1 id="main-title">Biorrelleno Sanitario</h1>
                </div>
            </div>
            <!--  -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav navbar-right blue-nav visible-xs">
                    <li><a href="{{ url('/') }}">¿Quiénes somos?</a></li>
                    <li><a href="{{ url('/manejo-integral') }}">Manejo de Residuos</a></li>
                    <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                    <li><a href="{{ url('/otras-actividades') }}">Otras Actividades</a></li>
                    <li><a href="{{ url('/legislacion') }}">Legislación</a></li>
                    <li><a href="{{ url('/estadisticas') }}">Estadísticas</a></li>
                    <li><a href="{{ url('/galeria') }}">Galería</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Starts main page -->
    <div class="container main-container">
        <div class="row tab-holder hidden-xs">
            <a href="{{ url('/') }}" class="tab">
                <div>
                    <p class="tab-text">¿Quiénes Somos?</p>
                </div>
            </a>
            <a href="{{ url('manejo-integral') }}" class="tab">
                <div>
                    <p class="tab-text">Manejo de Residuos</p>
                </div>
            </a>
            <a href="{{ url('contacto') }}" class="tab">
                <div>
                    <p class="tab-text">Contacto</p>
                </div>
            </a>
            <a href="{{ url('otras-actividades') }}" class="tab">
                <div>
                    <p class="tab-text">Otras Actividades</p>
                </div>
            </a>
            <a href="{{ url('legislacion') }}" class="tab">
                <div>
                    <p class="tab-text">Legislación</p>
                </div>
            </a>
            <a href="{{ url('estadisticas') }}" class="tab">
                <div>
                    <p class="tab-text">Estadísticas</p>
                </div>
            </a>
            <a href="{{ url('galeria') }}" class="tab">
                <div>
                    <p class="tab-text">Galería</p>
                </div>
            </a>
        </div>
        <div class="row main-row">
            <div class="col-md-8 col-sm-7">
                @yield('mainContent')
            </div>
            <hr class="visible-xs"/>
            <div class="col-md-4  col-sm-5">
                <h2 class="text-center interest-title">Páginas de Interés</h2>
                <div class="interest">
                    <h4 class="text-primary">Secretaria de Protección al Ambiente del Gobierno del Estado de Baja
                        California.</h4>
                    <h4><a href="http://www.spabc.gob.mx/">http://www.spabc.gob.mx/</a></h4>
                </div>

                <div class="interest">
                    <h4 class="text-primary">Secretaria de Medio Ambiente y Recursos Naturales</h4>
                    <h4><a href="https://www.gob.mx/semarnat">https://www.gob.mx/semarnat</a></h4>
                </div>

                <div class="interest">
                    <h4 class="text-primary">Procuraduría Federal de Protección al Ambiente</h4>
                    <h4><a href="http://www.profepa.gob.mx/">http://www.profepa.gob.mx/</a></h4>
                </div>

                <div class="interest">
                    <h4 class="text-primary">Metanogenesis a partir de residuos</h4>
                    <h4><a href="http://www.fao.org/docrep/019/as400s/as400s.pdf">http://www.fao.org/docrep/019/as400s/as400s.pdf</a></h4>
                </div>

                <div class="interest">
                    <h4 class="text-primary">-Calentamiento global y control gases de efecto invernadero en México</h4>
                    <h4><a href="http://cambioclimatico.conanp.gob.mx/">http://cambioclimatico.conanp.gob.mx/</a></h4>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>