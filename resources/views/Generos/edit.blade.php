@extends('Template/template')
@section('title', 'Registro de Generos')
@section('content')
<form action="{{ url('/Generos/'.$generos->id_genero) }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
{{ method_field('PATCH') }}

<div class="form-row">
    		<div class="form-group col-md-4">
      			<label for="txtGenero">Genero:</label>
      			<input name="des_gen" type="text" class="form-control" id="txtGenero" placeholder="Genero" value="{{$generos->des_gen}}">
    		</div>
  		</div>
  		<div class="form-row">
  			<div class="form-group col-md-4">
  				

                  <input type="submit" class="btn btn-primary" value="Editar">
				<a class="btn btn-primary" href="{{ url('Generos')}}"> Cancelar</a>
  			</div>
  		</div>


</form>

@endsection