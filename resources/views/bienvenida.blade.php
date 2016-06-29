<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bienvenida</title>
	<link rel="stylesheet" href="css/bootstrap-theme-darlky.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>


	<script>
        function editarInformacion(){
        	document.getElementById('titulo').disabled=false;
        	document.getElementById('titulo_select').style.visibility='visible';
            document.getElementById('titulo_select').style.display='initial';
            document.getElementById('nombre_universidad').disabled=false;
            document.getElementById('trabaja').disabled=false;
            document.getElementById('trabaja_select').style.visibility='visible';
            document.getElementById('trabaja_select').style.display='initial';
            document.getElementById('edad').disabled=false;
            document.getElementById('telefono').disabled=false;
            document.getElementById('sexo').disabled=false;
            document.getElementById('sexo_select').style.visibility='visible';
            document.getElementById('sexo_select').style.display='initial';
           	document.getElementById('graduacion').disabled=false;
            document.getElementById('salario_select').disabled=false;
            document.getElementById('salario_select').style.visibility='visible';
            document.getElementById('salario_select').style.display='initial';
            document.getElementById('con_generales_select').disabled=false;
            document.getElementById('con_generales_select').style.visibility='visible';
            document.getElementById('con_generales_select').style.display='initial';
            document.getElementById('con_especializados_select').disabled=false;
            document.getElementById('con_especializados_select').style.visibility='visible';
            document.getElementById('con_especializados_select').style.display='initial';
            document.getElementById('lenguas_extranjeras_select').disabled=false;
            document.getElementById('lenguas_extranjeras_select').style.visibility='visible';
            document.getElementById('lenguas_extranjeras_select').style.display='initial';
            document.getElementById('adaptabilidad_select').disabled=false;
            document.getElementById('adaptabilidad_select').style.visibility='visible';
            document.getElementById('adaptabilidad_select').style.display='initial';

            document.getElementById('guardar').disabled=false;
            document.getElementById('guardar').style.visibility='visible';
            document.getElementById('editar').disabled=true;
            document.getElementById('editar').style.visibility='hidden';
        }
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
                <a class="navbar-brand" href="{{ url('/') }}"><label for="">Bienvenid@ {{ Auth::user()->name }}</label></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                	<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>

	<div class="container">
		<div class="row">

		@if (Auth::user()->nombre_universidad != "")
			<form action="guardarInformacion" method="post" enctype="multipart/form-data">
			<button type="button" id="editar" onclick="editarInformacion();" class="btn btn-info">Editar Información</button>
			<div class="col-xs-12 well">

				<div class="form-group">
					<label for="">Cuenta con Titulo? </label><br>
					<input id="titulo" type="text" value="{{ Auth::user()->titulo }}" disabled="true">
					<div class="col-xs-4" id="titulo_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="titulo" >
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Su Universidad: </label><br>
					<input id="nombre_universidad" type="text" value="{{ Auth::user()->nombre_universidad }}" disabled="true">
					<div class="col-xs-4" id="salario_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="nombre_universidad" >
                            <option>UAS</option>
                            <option>TEC Culiacan</option>
                            <option>UDO</option>
                            <option>TEC Monterrey</option>
                        </select>
                    </div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Usted trabaja?  </label><br>
					<input id="trabaja" type="text" value="{{ Auth::user()->trabaja }}" disabled="true">
					<div class="col-xs-4" id="trabaja_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="trabaja" >
                            <option>Si</option>
                            <option>No</option>
                        </select>
                    </div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Su edad es: </label><br>
					<input id="edad" type="text" value="{{ Auth::user()->edad }}" disabled="true" placeholder="20" maxlength="2">
				</div>
				<br>
				<div class="form-group">
					<label for="">Su telefono es: </label><br>
					<input id="telefono" type="text" value="{{ Auth::user()->telefono }}" disabled="true" placeholder="6673891720" maxlength="10">
				</div>
				<br>
				<div class="form-group">
					<label for="">Su sexo es: </label><br>
					<input id="sexo" type="text" value="{{ Auth::user()->sexo }}" disabled="true">
					<div class="col-xs-4" id="sexo_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="sexo" >
                            <option>Hombre</option>
                            <option>Mujer</option>
                        </select>
                    </div>
				</div>
				<br>

				<div class="form-group">
					<label for="">Su graduacion fue: </label><br>
					<input id="graduacion" type="text" value="{{ Auth::user()->graduacion }}" disabled="true" placeholder="2000" maxlength="4">
				</div>
				<br>
				<div class="form-group">
					<label for="">Su salario: </label><br>
					<input id="salario" type="text" value="{{ Auth::user()->salario }}" disabled="true">
					<div class="col-xs-4" id="salario_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="salario" >
                            <option>Nada satisfecho</option>
                            <option>Poco satisfecho</option>
                            <option>Medianamente satisfecho</option>
                            <option>Muy satisfecho</option>
                            <option>Totalmente satisfecho</option>
                        </select>
                    </div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Sus exigencias en conocimientos generales: </label><br>
					<input id="con_generales" type="text" value="{{ Auth::user()->con_generales }}" disabled="true">
					<div class="col-xs-4" id="con_generales_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="adaptabilidad" >
                            <option>Ninguna exigencia</option>
                            <option>Poca exigencia</option>
                            <option>Moderada exigencia</option>
                            <option>Mucha exigencia</option>
                            <option>Total</option>
                        </select>
                    </div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Sus exigencias en conocimientos especializados: </label><br>
					<input id="con_especializados" type="text" value="{{ Auth::user()->con_especializados }}" disabled="true">
					<div class="col-xs-4" id="con_especializados_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="adaptabilidad" >
                            <option>Ninguna exigencia</option>
                            <option>Poca exigencia</option>
                            <option>Moderada exigencia</option>
                            <option>Mucha exigencia</option>
                            <option>Total</option>
                        </select>
                    </div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Sus exigencias en lenguas extranjeras: </label><br>
					<input id="lenguas_extranjeras" type="text" value="{{ Auth::user()->lenguas_extranjeras }}" disabled="true">
					<div class="col-xs-4" id="lenguas_extranjeras_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="adaptabilidad" >
                            <option>Ninguna exigencia</option>
                            <option>Poca exigencia</option>
                            <option>Moderada exigencia</option>
                            <option>Mucha exigencia</option>
                            <option>Total</option>
                        </select>
                    </div>
				</div>
				<br>
				<div class="form-group">
					<label for="">Sus exigencias en adaptabilid: </label><br>
					<input id="adaptabilidad" type="text" value="{{ Auth::user()->adaptabilidad }}" disabled="true">
					<div class="col-xs-4" id="adaptabilidad_select" disabled="true" style="visibility: hidden; display: none;">
                        <select class="form-control" name="adaptabilidad" >
                            <option>Ninguna exigencia</option>
                            <option>Poca exigencia</option>
                            <option>Moderada exigencia</option>
                            <option>Mucha exigencia</option>
                            <option>Total</option>
                        </select>
                    </div>
				</div>

			</div>
			<button disabled="true" style="visibility: hidden;" type="submit" id="guardar" class="btn btn-success pull-right">Guardar</button>
		</form>

        @else
            
            <div class="col-xs-12 well">
            	<table class="table">
            		<thead>
            			<tr>
            				<th>Nombre Completo</th>
            				<th>E-Mail</th>
            				<th>Titulo</th>
            				<th>Nombre Universidad</th>
            				<th>Edad</th>
            				<th>Telefono</th>
            				<th>Sexo</th>
            				<th>Graduación</th>
            				<th>Salario</th>
            				<th>Lenguas Extranjeras</th>
            				<th>Adaptabilidad</th>
            			</tr>
            		</thead>
            		<tbody>
            			@foreach($egresados as $e)
            			<tr>
            				<th>{{ $e->name }}</th>
            				<th>{{ $e->email }}</th>
            				<th>{{ $e->titulo }}</th>
            				<th>{{ $e->nombre_universidad }}</th>
            				<th>{{ $e->edad }}</th>
            				<th>{{ $e->telefono }}</th>
            				<th>{{ $e->sexo }}</th>
            				<th>{{ $e->graduacion }}</th>
            				<th>{{ $e->salario }}</th>
            				<th>{{ $e->lenguas_extranjeras }}</th>
            				<th>{{ $e->adaptabilidad }}</th>
            				<td><a href="{{url('/eliminar')}}/{{$a->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
            			</tr>
            			@endforeach
            		</tbody>
            	</table>
            </div>

        @endif	
		</div>
	</div>
</body>
</html>