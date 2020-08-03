@extends('Template/template')
@section('title', 'Lista de Espera')
@section('content')
<div class="col-12" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <br>
            <h2 class="text-center card-title font-weight-normal ">Lista de Espera</h2>
        </div>
        <div class="col-4">
            <label>Buscar Pelicula</label>
            <form class="form-inline">
                <input type="search" name="search" placeholder="Buscar Pelicula" class="form-control" arial-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-info btn-round" type="submit">Buscar</button>

                </div>
                <div class="col">
                <a href="{{url('/ListaEsperas')}}" class="btn btn-info border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-sync"></i></a>

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
                        <th>Socio</th>
                        <th>Pelicula</th>
                        <th>Estado</th>
                        <th>Llamar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peliculas as $lista)

                    <tr>
                        <td>{{$lista->fecha_registro}}</td>
                        <td>{{$lista->name}} {{$lista->ap_paterno}} {{$lista->ap_materno}}</td>
                        <td>{{$lista->titulo}}</td>
                        <td>{{$lista->estado}}</td>
                        <td>
                            <form class="form-inline" method="get">
                            @if(($lista->estado=="Disponible") || ($lista->estado=="disponible"))
                            <input type="text" name="llamar" value="{{$lista->id_espera}}" hidden>
                            <button class="btn btn-info btn-round" type="submit" onclick="return confirm('Su numero de telefono es:  {{$lista->telefono}}');"><i class="material-icons">phone</i></button>

                            <!-- <a href="{{url('/Generos/'.$lista->id_espera.'/create') }}" type="submit" rel="tooltip" class="btn btn-info btn-round" onclick="return alert('Su numero de telefono es:  {{$lista->telefono}}');"><i class="material-icons">phone</i></a> -->
                            @endif
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $ListaEsperas->links()}}
        </div>
    </div>
</div>
@endsection
