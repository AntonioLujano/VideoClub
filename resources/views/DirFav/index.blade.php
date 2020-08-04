@extends('Template/template')
@section('title', 'Directores')
@section('content')
    <div class="container">
    <span class="float-right mt-2">
            <a href="{{url('/Directores/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
                <i class="fa fa-user-plus" >    Registrar <br> Director</i>
            </a>
        </span>
        <h2 class="text-center card-title font-weight-normal mt-5">Listado de Directores</h2>
        <div class="col-4">
            <label>Buscar Pelicula</label>
            <form class="form-inline">
                <input type="search" name="search" placeholder="Buscar Pelicula" class="form-control" arial-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-info btn-round" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <div class="table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>

                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($directores as $director)
                <tr>
                    <td>{{$director->id_director}}</td>
                    <td>{{$director->nombre_dire}}</td>
                    <td>{{$director->ap_paterno}}</td>
                    <td>{{$director->ap_materno}}</td>
                    <td>

                    <a href="{{url('/Directores/'.$director->id_director.'/edit') }}" type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">edit</i>Editar</a>

                    <form action="{{ url('/Directores/'.$director->id_director) }}" method="POST" style="display:inline">

                    {{csrf_field() }}
                    {{ method_field('DELETE')}}
                    <button type="submit" class="btn btn-dark btn-round" name="eliminar" onclick="return confirm('¿Borrar?');" > <i class="material-icons">restore_from_trash</i>Eliminar</button>
                    </form>
                    </td>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
