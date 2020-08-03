@extends('Template/template')
@section('title', 'Lista de Prestamos')
@section('content')
<div class="col-12" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <br>
            <h2 class="text-center card-title font-weight-normal ">Lista de Prestamos</h2>
        </div>
        <div class="col-4">
            <label>Buscar Socio </label>
            <form class="form-inline">
                <input type="search" name="search" placeholder="Buscar Socio" class="form-control" arial-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-info btn-round" type="submit">Buscar</button>
                </div>
                <div class="col">
                <a href="{{url('/Devoluciones')}}" class="btn btn-info border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-sync"></i></a>

                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>Fecha de Registro</th>
                        <th>Correo</th>
                        <th>Socio</th>
                        <th>Clave</th>
                        <th>Pelicula</th>
                        <th>Estado</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($listado as $lista)
                    <tr>
                        <td>{{$lista->fecha}}</td>
                        <td>{{$lista->email}}</td>
                        <td>{{$lista->name}} {{$lista->ap_paterno}} {{$lista->ap_materno}}</td>
                        <td>{{$lista->clave}}</td>
                        <td>{{$lista->titulo}}</td>
                        <td>{{$lista->Estado}}</td>
                        <td>
                            <form class="form-inline">
                            <input type="text" name="devolver" value="{{$lista->id_peliprestada}}" hidden>
                            <button class="btn btn-info btn-round" type="submit" >Devolver<i class="material-icons"></i></button>
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
