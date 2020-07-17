@extends('Template/template')
@section('title', 'Generos')
@section('content')
<div class="container">
  	<span class="float-right mt-2">
        <a href="{{url('/Generos/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
        	<i class="fas fa-photo-video"> Registrar <br>  Genero</i>
        </a>
    </span>
        <h2 class="text-center card-title font-weight-normal mt-5">Listado de Generos</h2>
        <div class="table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Genero</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($generos as $Genero)
                <tr>
                    <td>{{$Genero->id_genero}}</td>
                    <td>{{$Genero->des_gen}}</td>
                    <td>
                        <a href="{{url('/Generos/'.$Genero->id_genero.'/edit') }}" type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">edit</i>Editar</a>
                        
                        <form action="{{ url('/Generos/'.$Genero->id_genero) }}" method="POST" style="display:inline">
                            
                        {{csrf_field() }}    
                        {{ method_field('DELETE')}}
                        <button type="submit" class="btn btn-dark btn-round" name="eliminar" onclick="return confirm('¿Borrar?');" > <i class="material-icons">restore_from_trash</i>Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
