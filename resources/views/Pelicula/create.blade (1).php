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
                        <th><a type="button" class="fas fa-plus-circle" data-toggle="modal" data-target="#director" ></a></th>
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
                        <th><a type="button" class="fas fa-plus-circle" data-toggle="modal" data-target="#genero" ></a></th>

                    </table>
                </div>
                <div class="form-group col-md-4">
      			    <label for="cantidad">Copias:</label>
      			    <input type="integer" id="cantidad" class="form-control" name="cantidad" placeholder="Copias">
    		    </div>
              </div>

            <div class="row">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <div class="col"><a class="btn btn-primary" href="{{url("Peliculas")}}"><i class=""></i> Cancelar</a></div>
            </div>
	    </form>
     </div>
    <div>
        <div class="modal fade" id="director">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar Director</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Apellido Materno:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modal fade" id="genero">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="txtGenero">Registrar Genero</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{url("/Generos")}}">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Genero:</label>
                                <input name="des_gen" type="text" class="form-control" id="txtGenero" >
                            </div>
                            @if ($errors->has('des_gen'))

                                <p>{{$errors->first('des_gen')}}</p>

                            @endif
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
