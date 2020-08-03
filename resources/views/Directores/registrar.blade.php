@extends('Template/template')
@section('title', 'Registro de Directores')
@section('content')
<div class="container-fluid">
	<meta charset="utf-8">
	<h3 class="centrar">Registro de Directores</h3>

	@if($errors->any())
    <div class="alert alert-danger">
        <h6>Por favor llena todos los campos:</h6>
    </div>

    @endif
	<form action="/Directores" method="POST">
    @csrf
	<div class="form-row">
		  <div class="form-group col-md-4">
      			<label for="txtNombre">Nombre(s):</label>
      			<input name="nombre_dire" type="text" class="form-control" id="txtNombre" placeholder="Nombre" autocomplete="off">
			</div>
			@if ($errors->has('nombre_dire'))

                    <p>{{$errors->first('nombre_dire ')}}</p>

            @endif
		  </div>
		  <div class="form-row">
		  <div class="form-group col-md-4">
      			<label for="txtApPaterno">Apellido Paterno:</label>
      			<input name="ap_paterno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno" autocomplete="off">
			</div>
			@if ($errors->has('ap_paterno'))

                    <p>{{$errors->first('ap_paterno ')}}</p>

            @endif
		  </div>
		  <div class="form-row">
		  <div class="form-group col-md-4">
    			<label for="txtApMaterno">Apellido Materno:</label>
    			<input name="ap_materno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno" autocomplete="off">
				
			</div>
			@if ($errors->has('ap_materno'))

				<p>{{$errors->first('ap_materno ')}}</p>

				@endif
		  </div>

  		<div class="form-row">
  			<div class="form-group col-md-4">
  				
  				<button type="submit" class="btn btn-primary">Guardar</button>
  				<a class="btn btn-primary" href="{{ url('Directores')}}"> Cancelar</a>
  			</div>
  		</div>
	</form>
</div>
@endsection