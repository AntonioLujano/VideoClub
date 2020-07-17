@extends('Template/template')
@section('title', 'Registro de Actores')
@section('content')
<div class="container-fluid">
	<meta charset="utf-8">
	<h3 class="centrar">Editar de Actor</h3>
  <form action="{{ url('/Actores/'.$actores->id_actor) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="form-row">
          <div class="form-group col-md-4">
              <label for="txtNombre">Nombre(s):</label>
              <input name="nombre_act" type="text" class="form-control" id="txtNombre" placeholder="Nombre" value="{{$actores->nombre_act}}">
          </div>
          <div class="form-group col-md-4">
              <label for="txtApPaterno">Apellido Paterno:</label>
              <input name="ap_paterno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno" value="{{$actores->ap_paterno}}">
          </div>
          <div class="form-group col-md-4">
            <label for="txtApMaterno">Apellido Materno:</label>
            <input name="ap_materno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno" value="{{$actores->ap_materno}}">
          </div>
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