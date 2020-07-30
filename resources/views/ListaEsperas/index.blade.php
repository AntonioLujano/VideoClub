@extends('Template/template')
@section('title', 'Lista de Espera')
@section('content')
    <meta charset="UTF-8">
    <div class="container">
        <h2 class="text-center card-title font-weight-normal mt-5">Lista de Espera</h2>
         <div class="form-row">
            <div class="form-group col-md-5 ml-5">
                <label>Buscar Pelicula</label>
                <form class="form-inline">
                    <input type="search" name="search" placeholder="Nombre de la pelicula" class="form-control" arial-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-info btn-round" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
            <div class="form-group col-md-5 ml-5">
                <a href="{{url('/ListaEsperas')}}" class="btn btn-outline-secondary mt-4 bg-info text-light">Mostrar Lista Completa</a>
            </div>
        </div>
            <table class="table table-light table-hover">
                <thead class="thead-light">
                    <tr>
                        <th><center>Peliculas</th>
                        <th>  
                        <th><center>Fecha de Pedidos</center></th>
                        <th><center>Socios</center></th>
                        <th><center>Estado</center></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($ListaEsperas as $lista)
                            <tr>
                              <div class="col-md-4">
                                <th><img src="img/logo/icon.png" class="responsive-img" alt="100px" width="50px">
                                  <th>{{$lista->titulo}}</th>
                                </th>
                                <th>{{$lista->fecha_registro}}</th>
                                <th>{{$lista->nombre}} {{$lista->ap_paterno}} {{$lista->ap_materno}}</th>
                                <th>{{$lista->estado}}</th>
                              </div>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
