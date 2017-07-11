<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Escuela</title>

	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{URL::asset('/assets/css/estilo.css')}}" />
	


</head>
<body>


<div class="container">
	<div class="row">
		<div class="col">
			<header>
				<h1>App Escuela</h1>
			</header>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<ul>   
				<a href="{{url('/alumno/index')}}"><li>Alumnos</li></a>
				
				<a href="{{url('/alumno/nuevo')}}"><li>Nuevo Alumno</li></a>
				<a href="{{url('/nota/nuevo')}}"><li>Nueva Nota</li></a>
			</ul>
		</div>
	</div>
</div>




@yield('content')


<div class="container">
	<div class="row">
		<div class="col">
			<footer>
			
				<h5>Desarrollado por: <b>André Rivera</b></h5>
			</footer>
		</div>
	</div>
</div>



</body>
</html>