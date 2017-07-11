@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Alumnos</h2>

			<table class="table table-striped">
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Opciones</th>
					</tr>

				@foreach($alumnos as $alumno)
					<tr>
						<td>{{$alumno['id']}}</td>
						<td>{{$alumno['nombre']}}</td>
						<td>{{$alumno['email']}}</td>
						<td>
							<a href="{{route('alumno_editar', ['id' => $alumno['id']])}}" class="btn btn-default">Editar</a>

							<a href="{{route('alumno_nota', ['id' => $alumno['id']])}}" class="btn btn-default">Ver notas</a>
							<a href="{{route('alumno_eliminar', ['id' => $alumno['id']])}}" class="btn btn-danger"">Eliminar</a>
							
						</td>
					</tr>
				@endforeach


					
			</table>
			
		</div>
	</div>
</div>

@stop
