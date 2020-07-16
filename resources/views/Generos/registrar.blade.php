@extends('Template/template')
@section('title', 'Registrar Generos')
@section('content')
<div clas="container-fluid">
	<h3>Registrar Genero</h3>
	<form method="post">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="txtdes_gen">Descripcion Genero:</label>
				<input type="text" name="txtdes_gen" class="form-control" id="txtdes_gen" placeholder="Ingresa genero">
			</div>
			<br>
			<div class="form-group col-md-6">
				<input type="submit" name="Agregar" class="btn btn-dark btn-round">
			</div>
		</div>
	</form>
</div>
@endsection