@extends('Template/template')
@section('title', 'Generos')
@section('content')
<div class="container">
        <h2 class="text-center card-title font-weight-normal mt-5">Listado de Generos</h2>
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

                    <th>Genero</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($generos as $Genero)
                <tr>

                    <td>{{$Genero->des_gen}}</td>
                    <td>
                    @foreach($genf as $genfa)
                    <form action="{{url('/GenFav/favorito') }}" class="form-inline col-5">
                        @if($Genero->id_genero==$genfa->id_genero)
                        <input type="text" name="nofav" value="{{$Genero->id_genero}}" hidden>
                        <button class="btn btn-outline-danger border-0 btn-round" type="submit"><i class="fas fa-heart"></i></i></button>
                        @else
                        <input type="text" name="fav" value="{{$Genero->id_genero}}" hidden>
                        <button class="btn btn-outline-danger border-0 btn-round" type="submit"><i class="far fa-heart"></i></button>
                        @endif
                        </form>
                        @endforeach
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
