<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Principal</title>
    <link rel="stylesheet" href="css/bootstrap-theme-darlky.css">
</head>
<body>
	<div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>SEGUIMIENTO DE EGRESADOS......</h1>
                <hr>
            </div>

			<div class="lista jumbotron col-xs-12">
				<p style="text-align: justify;">
					La finalidad de esta pagina es llevar un seguimiento de egresados de las distintas instituciones educativas en sinaloa, sean publicas o privadas tendran acceso a esta para llevar un registro de sus egresados y su historial, esto tiene como finalidad el tener un registro de los ex-alumnos de cada institucion asi como su historial profesional(siempre y cuando este asi lo quiera), para posibles futuros trabajos y oportunidades veneficiando ambas partes.

				</p>
			</div>
		</div>
			<div class="container" align="center">
				
						<a href="{{url('/bienvenida')}}" class="btn btn-success btn-lg active">  Acceder  </a>
						<br>
						<br>
						<br>
						<a href="{{url('/registro')}}" class="btn btn-link">Registro Universidades</a>
						<br>
						<a href="{{url('/RegistroEgresados')}}" class="btn btn-link">Registro Egresados</a>
			</div>

		<footer class="row">
			<div class="col-xs-12 text-center">
			<br>
			<br>
			<br>
				Itzel & Javier &copy;
			</div>
		</footer>
	</div>
</body>
</html>