@extends('Template/template')
@section('title', 'Generos')
@section('content')
<div class="container">
    <h2 class="text-center card-title font-weight-normal mt-5">Listado de Generos Seleccione su Favorito </h2>
    <div class="col-4">
        <label>Buscar Pelicula</label>
        <form class="form-inline">
            <input type="search" name="search" placeholder="Buscar Pelicula" class="form-control" arial-label="Search">
            <div class="input-group-append">
                <button class="btn btn-info btn-round" type="submit">Buscar</button>
            </div>
            <div class="col">
                <a href="{{url('/GenFav')}}" class="btn btn-info border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-sync"></i></a>

                </div>
        </form>
    </div>
    <div class="row">
        <div class="col-5">
        <h4 class="text-center card-title font-weight-normal mt-5">Todos los Generos </h4>
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
                            <form class="form-inline col-5">
                                    <input type="text" name="fav" value="{{$Genero->id_genero}}" hidden>
                                    <button class="btn btn-outline-danger border-0 btn-round" type="submit"><i class="far fa-heart"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-5">
        <h4 class="text-center card-title font-weight-normal mt-5">Tus Favoritos</h4>
            <div class="table-responsive card card-body mt-5">
                <table class="table table-light" class="table table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Genero</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($genf as $genfa)
                        <tr>
                            <td>{{$genfa->des_gen}}</td>
                            <td>
                                <form class="form-inline col-5">
                                    <input type="text" name="nofav" value="{{$genfa->id_genero}}" hidden>
                                    <button class="btn btn-outline-danger border-0 btn-round" type="submit"><i class="fas fa-heart"></i></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
