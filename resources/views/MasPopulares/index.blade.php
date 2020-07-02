
@extends('Template/template')
@section('title', 'Mas Populares')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="text-center card-title font-weight-normal mt-5">Lista de Peliculas</h2>
        </div>
        <div class="col-2">
            <a href="" class="btn btn-outline-secondary mt-5 bg-info text-light"><i class="fas fa-reply">  Regresar</i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Titulos</th>
                        <th>Directores</th>
                        <th>Generos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peliculas as $Pelicula)
                    <tr>
                        <td>{{$Pelicula->id_pelicula}}</td>
                        <td>{{$Pelicula->titulo}}</td>
                        <td>{{$Pelicula->nombre}} {{$Pelicula->ap_paterno}} {{$Pelicula->ap_materno}}</td>
                        <td>{{$Pelicula->des_gen}}</td>
                        <td>
                            <form>
                                <a href="{{url('/RentadePeliculas')}}"><button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-credit-card">Rentar</i></button></a>
                                <button type="button" class="btn btn-outline-primary border-0"><i class="fas fa-thumbs-down">    Eliminar</i></button>
                                <button type="button" class="btn btn-outline-warning border-0"><i class="far fa-star">   Favorita</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
