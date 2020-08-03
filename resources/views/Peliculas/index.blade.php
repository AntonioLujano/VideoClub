@extends('Template/template')
@section('title', 'Peliculas')
@section('content')
    <div class="container">
    @if($errors->any())

    <p>Hay errores!</p>

    @endif

        <span class="float-right mt-2">
            <a href="{{url('/Peliculas/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
                <i class="fa fa-user-plus" >    Registrar <br> Pelicula</i>
            </a>
        </span>
        <h2 class="text-center card-title font-weight-normal mt-5">Peliculas</h2>
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
                    <th>Título</th>
                    <th>Director</th>
                    <th>Genero</th>
                    <th>Copias</th>

                    <th>Acciones</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($Peliculas as $Pelicula)
                <tr>
                    <td>{{$Pelicula->titulo}}</td>
                    <td>{{$Pelicula->getDirector[0]?$Pelicula->getDirector[0]->nombre_dire:""}}</td>
                    <td>{{$Pelicula->getGenero[0]?$Pelicula->getGenero[0]->des_gen:""}}</td>
                    <td>{{$Pelicula->cantidad}}</td>
                    <div>

                    <td>
                        <a href="{{route("Peliculas.edit",$Pelicula->id_pelicula)}}"  class="btn btn-info btn-round">
                            <i class="material-icons">edit</i>
                            Editar
                        </a>

                    </td>
                    <td>
                        <form action="{{url("Peliculas")."/".$Pelicula->id_pelicula}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-dark btn-round" name="eliminar"><i class="material-icons">restore_from_trash</i>Eliminar</button>

                        </form>
                    </td>

                    </div>

                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        window.addEventListener("load",function(){
            document.getElementById("texto").addEventListener("keyup",function(){
                fetch(` /Peliculas/buscador?texto=${document.getElementById("texto").value}`,{
                method:'get'
                })
                .then(response => response.text())
                .then(html => {
                document.getElementById("resultados").innerHTML = html
                })
            })
        })
    </script>
@endsection
