@extends('Template/template')
@section('title', 'Registro de Peliculas')
@section('content')

<div class="container-fluid">
	<meta charset="utf-8">
	<h3 class="centrar">Registro de Peliculas</h3>
	
	<form>
  		<div class="form-row">
    		<div class="form-group col-md-4">
      			<label for="txtTitulo">Título:</label>
      			<input type="text" class="form-control" id="txtTitulo" placeholder="Título">
    		</div>
    		<div class="form-group col-md-4">
    			<label for="txtDirector">Director:</label>
          <select class="form-control">
            <option>Elige una opcion</option>
            <option>John</option>
          </select>
  			</div>
  		</div>
  		<div class="form-row">
  			<div class="form-group col-md-4">
    			<label for="txtGenero">Genero:</label>
    			<select class="form-control">
            <option>Elige una opcion</option>
            <option>John</option>
          </select>
    		</div>
  		</div>
		  <div class="form-group col-md-4">
      			<label for="intcantidad">Copias:</label>
      			<input type="integer" class="form-control" id="intcantidad" placeholder="cantidad">
    		</div> 
  		<div class="form-row">
  			<div class="form-group col-md-4">
  				<button type="submit" class="btn btn-primary">Limpiar</button>
  				<button type="submit" class="btn btn-primary">Guardar</button>
  				<button type="submit" class="btn btn-primary">Cancelar</button>
  			</div>
  		</div>
	</form>
</div>
@endsection