@extends('Template/template')
@section('title', 'Registro de Actores')
@section('content')
<div class="container-fluid">
	<meta charset="utf-8">
	<h3 class="centrar">Registro de Actores</h3>
	@if($errors->any())
    <div class="alert alert-danger">
        <h4>Corrige los errores para continuar:</h4>
    </div>

    @endif
	<form action="/Actores" method="POST">
    @csrf
  		<div class="form-row">
    		<div class="form-group col-md-4">
      			<label for="txtNombre">Nombre(s):</label>
      			<input name="nombre_act" type="text" class="form-control" id="txtNombre" placeholder="Nombre">
    		</div>
			@if ($errors->has('nombre_act'))

                    <p>{{$errors->first('nombre_act ')}}</p>
					

            @endif
    		<div class="form-group col-md-4">
      			<label for="txtApPaterno">Apellido Paterno:</label>
      			<input name="ap_paterno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno">
    		</div>
			@if ($errors->has('ap_paterno'))

                    <p>{{$errors->first('ap_paterno ')}}</p>

            @endif
    		<div class="form-group col-md-4">
    			<label for="txtApMaterno">Apellido Materno:</label>
    			<input name="ap_materno"type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno">
  			</div>
			  @if ($errors->has('ap_materno'))

                    <p>{{$errors->first('ap_materno ')}}</p>

            @endif
        
  		</div>
  		<div class="form-row">
  			<div class="form-group col-md-4">
  				<button type="submit" class="btn btn-primary">Guardar</button>
  				<a class="btn btn-primary" href="{{ url('Actores')}}"> Cancelar</a>
				  
  			</div>
  		</div>
	</form>
</div>
@endsection