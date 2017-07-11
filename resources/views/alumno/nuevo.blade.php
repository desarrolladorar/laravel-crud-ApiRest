@extends('layouts.master')

@section('content')




<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Agregar Alumno</h2>

			

			<form method="post">
			{{csrf_field()}}
				  <div class="form-group">
				    <label for="nombre">Nombre</label>
				    <input type="text" class="form-control" id="nombre"
				           placeholder="Introduce tu nombre" name="nombre" value="{{Input::old('nombre') }}">
				  </div>
				  <div class="form-group">
				    <label for="email" >Email</label>
				    <input type="email" class="form-control" id="email" 
				           placeholder="Email" name="email" value="{{Input::old('email') }}">
				  </div>
				 
				   <input class="btn btn-default" type="submit" value="ENVIAR" />
				</form>
							
						</div>
					</div>
			</div>



@stop
