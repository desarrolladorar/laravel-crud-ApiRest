@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<h2>Agregar Nota</h2>

			

			<form method="post">
					{{csrf_field()}}

				  <div class="form-group">
				    <label for="nota">curso</label>
				    <input type="text" class="form-control" id="curso"
				           placeholder="Introduce tu curso" name="curso" value="{{Input::old('curso') }}">
				  </div>
				  
				  <div class="form-group">
				    <label for="nota" >nota</label>
				    <input type="text" class="form-control" id="nota" 
				           placeholder="nota" name="nota" value="{{Input::old('nota') }}">
				  </div>

				  <div class="form-group">

				    <label for="alumno_id" >alumno_id</label>
				    	
				    <select name="alumno_id" id="alumno_id" class="form-control" value="{{Input::old('alumno_id') }}">

				    			@foreach($alumnos as $alumno)
					<option value="{{$alumno['id']}}" @if($alumno=='$alumno["id"]')selected @endif >{{$alumno['nombre']}}</option>
								@endforeach
		  
					</select>
	
				  </div>

				 

					 <input class="btn btn-default" type="submit" value="Enviar" />
					
				  
				</form>
							
						</div>
					</div>
			</div>

@stop
