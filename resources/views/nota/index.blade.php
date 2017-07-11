@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6">

			<h2>Notas de</h2>

			<table class="table table-striped">
					<tr>
						<th>Curso</th>
						<th>Nota</th>
						
						<th>Opciones</th>
					</tr>
					@foreach($nota as $notas)
					<tr>
						<td>{{$notas['curso']}}</td>
						<td>{{$notas['nota']}}</td>
						<td>
							<a href="{{route('nota_editar', ['id' => $notas['id']])}}" class="btn btn-default">Editar</a>
							<a href="{{route('nota_eliminar', ['id' => $notas['id']])}}" class="btn btn-danger"">Eliminar</a>
						</td>
					</tr>

					@endforeach

					
			</table>
			
		</div>
	</div>
</div>

@stop
