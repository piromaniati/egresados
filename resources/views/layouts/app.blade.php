<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    
    <link rel="stylesheet" href="css/bootstrap-theme-darlky.css">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

    <script>
        function activar(){
            document.getElementById('nombre_universidad').disabled=false;
            document.getElementById('nombre_universidad').style.visibility='visible';
            document.getElementById('nombre_universidad').style.display='initial';
            document.getElementById('titulo').disabled=false;
            document.getElementById('titulo').style.visibility='visible';
            document.getElementById('titulo').style.display='initial';
            
            document.getElementById('trabajo').disabled=false;
            document.getElementById('trabajo').style.visibility='visible';
            document.getElementById('trabajo').style.display='initial';
            document.getElementById('edad').disabled=false;
            document.getElementById('edad').style.visibility='visible';
            document.getElementById('edad').style.display='initial';
            document.getElementById('telefono').disabled=false;
            document.getElementById('telefono').style.visibility='visible';
            document.getElementById('telefono').style.display='initial';
            document.getElementById('sexo').disabled=false;
            document.getElementById('sexo').style.visibility='visible';
            document.getElementById('sexo').style.display='initial';
            document.getElementById('graduacion').disabled=false;
            document.getElementById('graduacion').style.visibility='visible';
            document.getElementById('graduacion').style.display='initial';
            document.getElementById('ideas_propias').disabled=false;
            document.getElementById('ideas_propias').style.visibility='visible';
            document.getElementById('ideas_propias').style.display='initial';
            document.getElementById('salario').disabled=false;
            document.getElementById('salario').style.visibility='visible';
            document.getElementById('salario').style.display='initial';
            document.getElementById('trabajo_equipo').disabled=false;
            document.getElementById('trabajo_equipo').style.visibility='visible';
            document.getElementById('trabajo_equipo').style.display='initial';
            document.getElementById('ambiente').disabled=false;
            document.getElementById('ambiente').style.visibility='visible';
            document.getElementById('ambiente').style.display='initial';
            document.getElementById('con_generales').disabled=false;
            document.getElementById('con_generales').style.visibility='visible';
            document.getElementById('con_generales').style.display='initial';
            document.getElementById('con_especializados').disabled=false;
            document.getElementById('con_especializados').style.visibility='visible';
            document.getElementById('con_especializados').style.display='initial';
            document.getElementById('lenguas_extranjeras').disabled=false;
            document.getElementById('lenguas_extranjeras').style.visibility='visible';
            document.getElementById('lenguas_extranjeras').style.display='initial';
            document.getElementById('adaptabilidad').disabled=false;
            document.getElementById('adaptabilidad').style.visibility='visible';
            document.getElementById('adaptabilidad').style.display='initial';

        }

        function desactivar(){
            document.getElementById('nombre_universidad').disabled=true;
            document.getElementById('nombre_universidad').style.visibility='hidden';
            document.getElementById('nombre_universidad').style.display='none';
            document.getElementById('titulo').disabled=true;
            document.getElementById('titulo').style.visibility='hidden';
            document.getElementById('titulo').style.display='none';
            document.getElementById('trabajo').disabled=true;
            document.getElementById('trabajo').style.visibility='hidden';
            document.getElementById('trabajo').style.display='none';
            document.getElementById('edad').disabled=true;
            document.getElementById('edad').style.visibility='hidden';
            document.getElementById('edad').style.display='none';
            document.getElementById('telefono').disabled=true;
            document.getElementById('telefono').style.visibility='hidden';
            document.getElementById('telefono').style.display='none';
            document.getElementById('sexo').disabled=true;
            document.getElementById('sexo').style.visibility='hidden';
            document.getElementById('sexo').style.display='none';
            document.getElementById('graduacion').disabled=true;
            document.getElementById('graduacion').style.visibility='hidden';
            document.getElementById('graduacion').style.display='none';
            document.getElementById('ideas_propias').disabled=true;
            document.getElementById('ideas_propias').style.visibility='hidden';
            document.getElementById('ideas_propias').style.display='none';
            document.getElementById('salario').disabled=true;
            document.getElementById('salario').style.visibility='hidden';
            document.getElementById('salario').style.display='none';
            document.getElementById('trabajo_equipo').disabled=true;
            document.getElementById('trabajo_equipo').style.visibility='hidden';
            document.getElementById('trabajo_equipo').style.display='none';
            document.getElementById('ambiente').disabled=true;
            document.getElementById('ambiente').style.visibility='hidden';
            document.getElementById('ambiente').style.display='none';
            document.getElementById('con_generales').disabled=true;
            document.getElementById('con_generales').style.visibility='hidden';
            document.getElementById('con_generales').style.display='none';
            document.getElementById('con_especializados').disabled=true;
            document.getElementById('con_especializados').style.visibility='hidden';
            document.getElementById('con_especializados').style.display='none';
            document.getElementById('lenguas_extranjeras').disabled=true;
            document.getElementById('lenguas_extranjeras').style.visibility='hidden';
            document.getElementById('lenguas_extranjeras').style.display='none';
            document.getElementById('adaptabilidad').disabled=true;
            document.getElementById('adaptabilidad').style.visibility='hidden';
            document.getElementById('adaptabilidad').style.display='none';
        }
    </script>
</head>
<body id="app-layout">
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
                    Principal
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Registro</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar seción</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
