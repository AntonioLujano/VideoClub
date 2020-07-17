@extends('Template/template')
@section('title', 'Registro de Directores')
@section('content')
<div class="container-fluid">
	<meta charset="utf-8">
	<h3 class="centrar">Registro de Directores</h3>
	<form action="/Directores" method="POST">
    @csrf
  		<div class="form-row">
    		<div class="form-group col-md-4">
      			<label for="txtNombre">Nombre(s):</label>
      			<input name="nombre_dire" type="text" class="form-control" id="txtNombre" placeholder="Nombre">
    		</div>
    		<div class="form-group col-md-4">
      			<label for="txtApPaterno">Apellido Paterno:</label>
      			<input name="ap_paterno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno">
    		</div>
    		<div class="form-group col-md-4">
    			<label for="txtApMaterno">Apellido Materno:</label>
    			<input name="ap_materno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno">
  			</div>
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