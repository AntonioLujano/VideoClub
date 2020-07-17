@extends('Template/template')
@section('title', 'Registro de Generos')
@section('content')
<div class="container-fluid">
	<meta charset="utf-8">
	<h3 class="centrar">Registro de Generos </h3>
	<form action="/Generos" method="POST">
    @csrf
  		<div class="form-row">
    		<div class="form-group col-md-4">
      			<label for="txtGenero">Genero:</label>
      			<input name="des_gen" type="text" class="form-control" id="txtGenero" placeholder="Genero">
    		</div>
  		</div>
  		<div class="form-row">
  			<div class="form-group col-md-4">
  				
  				<button type="submit" class="btn btn-primary">Guardar</button>
				<a class="btn btn-primary" href="{{ url('Generos')}}"> Cancelar</a>
  			</div>
  		</div>
	</form>
</div>
@endsection