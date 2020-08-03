@extends('Template/template')
@section('title', 'Registro de Peliculas')
@section('content')
<div class="container-fluid">
	<meta charset="utf-8">
    <h3 class="centrar">Registro de Peliculas</h3>
    @if($errors->any())
    <div class="alert alert-danger">
        <h6>Corrige los errores para continuar:</h6>
    </div>

    @endif
    <div class="row">
        <div class="col"><a class="btn btn-primary" href="{{url("Peliculas")}}"><i class="fas fa-reply"></i> Regresar</a></div>
    </div>

    <div class="">
	    <form method="POST"action="{{url("Peliculas")}}">
            @csrf
  		    <div class="form-row">
    		    <div class="form-group col-md-4">
      			    <label for="titulo">Título:</label>
      			    <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título">
                </div>
                @if ($errors->has('titulo'))

                    <p>{{$errors->first('titulo')}}</p>

                @endif
    		   
            </div>
            <div class="form-group col-md-4">
                    <label for="nombre_dire">Director:</label>
                    <table>
                        <th><select class="form-control" name="id_director" id="">
                                <option value="">Elige una opcion</option>
                                @foreach($Directores as $Directore)
                                    <option value="{{$Directore->id_director}}">{{$Directore->nombre_dire}}</option>
                                @endforeach
                        </select></th>
                    </table>
  			    </div>
  		    <div class="form-row">
  			    <div class="form-group col-md-4">
                    <label for="des_gen">Genero:</label>
                    <table>
                        <th><select class="form-control" name="id_genero" id="">
                                <option value="">Elige una opcion</option>
                                @foreach($Generos as $Genero)
                                    <option value="{{$Genero->id_genero}}">{{$Genero->des_gen}}</option>
                                @endforeach
                            </select></th>
                    </table>
                </div>
                <div class="form-group col-md-4">
      			    <label for="cantidad">Copias:</label>
      			    <input type="integer" id="cantidad" class="form-control" name="cantidad" placeholder="Copias">
    		    </div>
              </div>
              
            <button type="submit" class="btn btn-primary">Guardar</button>
	    </form>
    </div>
</div>
@endsection
