@extends('Template/template')
@section('title', 'Directores')
@section('content')
<div class="container">
    <h2 class="text-center card-title font-weight-normal mt-5">Listado de Directores Seleccione su Favorito </h2>
    <div class="col-4">
        <label>Buscar Pelicula</label>
        <form class="form-inline">
            <input type="search" name="search" placeholder="Buscar Pelicula" class="form-control" arial-label="Search">
            <div class="input-group-append">
                <button class="btn btn-info btn-round" type="submit">Buscar</button>
            </div>
            <div class="col">
                <a href="{{url('/DirFav')}}" class="btn btn-info border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-sync"></i></a>

            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-6">
            <h4 class="text-center card-title font-weight-normal mt-5">Todos los Directores </h4>
            <div class="table-responsive card card-body mt-5">
                <div class="row">
                    @foreach($directores as $director)
                    <div class="col-12">
                        <div class="card shadow-sm" title="{{$director->nombre_dire}} {{$director->ap_paterno}} {{$director->ap_materno}}">
                            <br><!-- <img src="img/pelicula.png" class="card-img-top"> -->
                            <label class="col-12">Director:
                            </label>
                            <label class="col-12">{{$director->nombre_dire}} {{$director->ap_paterno}} {{$director->ap_materno}}</label>
                            <hr>
                            <div class="card-body">
                                @foreach($directores as $dfav)
                                @php
                                $id_dir=($director->id_director);
                                $id_dirf=($dfav->id_director);
                                @endphp
                                @if($id_dir==$id_dirf)
                                <label class="col-12">Titulo:{{$dfav->titulo}}</label>
                                @endif
                                @endforeach
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form class="form-inline col-5">
                                            <input type="text" name="fav" value="{{$director->id_director}}" hidden>
                                            <button class="btn btn-outline-danger border-0 btn-round" type="submit"><i class="far fa-heart"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-6">
            <h4 class="text-center card-title font-weight-normal mt-5">Tus Favoritos</h4>
            <div class="table-responsive card card-body mt-5">
                <table class="table table-light" class="table table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Nombre</th>

                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dirf as $director)
                        <tr>
                            <td>Director: {{$director->nombre_dire}}  {{$director->ap_paterno}}   {{$director->ap_materno}}</td>
                            <td>
                            <form class="form-inline col-5">
                                    <input type="text" name="nofav" value="{{$director->id_dirfav}}" hidden>
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
