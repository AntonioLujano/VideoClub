
@extends('Template/template')
@section('title', 'Mas Populares')
@section('content')
<div class="container">
    <h2 class="text-center card-title font-weight-normal mt-3">Lista de Peliculas</h2>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Buscar Pelicula</label>
            <form class="form-inline">
                <input type="search" name="search" placeholder="Buscar Pelicula" class="form-control" arial-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar btn btn-primary" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <div class="form-group col-md-5 ml-5">
            <a href="{{url('/MasPopulares')}}" class="btn btn-outline-secondary mt-4 bg-info text-light">
                Mostrar Lista Completa</a>
            <a href="{{url('/RentadePeliculas')}}" class="btn btn-outline-secondary mt-4 bg-info text-light"><i class="fas fa-shopping-cart">Carrito de rentas</i></a>
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
