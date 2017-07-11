@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Editar Nota</h2>

			<table class="table table-striped">
					<tr>
						<th>Curso</th>
						<th>Nota</th>
						<th>Opciones</th>
					</tr>

					<tr>
					<form method="post">
					
						{{csrf_field()}}
						<td><input type="text" name="curso" value="{{ $nota['curso']}}"></td>
						<td><input type="text" name="nota" value="{{ $nota['nota']}}"></td>
						
						<td>
							<input value="Editar" class="btn btn-default" type="submit">
					</form>
	
						</td>
					</tr>

					
			</table>
			
		</div>
	</div>
</div>

@stop
