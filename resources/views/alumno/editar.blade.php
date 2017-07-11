@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Editar Alumnos</h2>

			<table class="table table-striped">
					<tr>
						
						<th>Nombre</th>
						<th>Email</th>
						<th>Opciones</th>
					</tr>

					<tr>
					<form method="post">
					
						{{csrf_field()}}
						
						<td><input type="text" name="nombre" value="{{ $alumno['nombre']}}"></td>
						<td><input type="text" name="email" value="{{ $alumno['email']}}"></td>
						<td>
							
							
							<input value="Editar" class="btn btn-default" type="submit">
							
							
						</td>
					</form>
					</tr>

					
			</table>
			
		</div>
	</div>
</div>


@stop
