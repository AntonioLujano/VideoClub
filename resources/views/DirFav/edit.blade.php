@extends('Template/template')
@section('title', 'Registro de Directores')
@section('content')
<form action="{{ url('/Directores/'.$directores->id_director) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}
<div class="form-row">
    		<div class="form-group col-md-4">
      			<label for="txtNombre">Nombre(s):</label>
      			<input name="nombre_dire" type="text" class="form-control" id="txtNombre" placeholder="Nombre" value="{{$directores->nombre_dire}}">
    		</div>
    		<div class="form-group col-md-4">
      			<label for="txtApPaterno">Apellido Paterno:</label>
      			<input name="ap_paterno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno" value="{{$directores->ap_paterno}}">
    		</div>
    		<div class="form-group col-md-4">
    			<label for="txtApMaterno">Apellido Materno:</label>
    			<input name="ap_materno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno" value="{{$directores->ap_materno}}">
  			</div>
  		</div>
  		<div class="form-row">
  			<div class="form-group col-md-4">
  				
  				<button type="submit" class="btn btn-primary">Guardar</button>
                <a class="btn btn-primary" href="{{ url('Directores')}}"> Cancelar</a>
  			</div>
  		</div>
</form>
@endsection