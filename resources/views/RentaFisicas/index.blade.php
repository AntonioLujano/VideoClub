@extends('Template/template')
@section('content')
@section('title', 'Renta de Peliculas')
<div class="col-12" class="container">
    <h2 class="text-center card-title font-weight-normal mt-3">Renta de Peliculas</h2>
    <div class="row">
        <div class="col-12 table-responsive card card-body mt-5">
            <form action="" method="post">
                <div class="btn-group">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Socio</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        @foreach($peliculas as $Pelicula)
                            <option name="{{$Pelicula->id_pelicula}}">{{$Pelicula->titulo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col"></div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Socio</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        @foreach($peliculas as $Pelicula)
                            <option name="{{$Pelicula->id_pelicula}}">{{$Pelicula->titulo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-2"><button class="btn btn-info btn-round" type="submit">Rentar</button></div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>Titulos</th>
                        <th>Directores</th>
                        <th>
                            Generos
                        </th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($peliculas as $Pelicula)
                    <tr>
                        <td>{{$Pelicula->titulo}}</td>
                        <td>{{$Pelicula->nombre_dire}} {{$Pelicula->ap_paterno}} {{$Pelicula->ap_materno}}</td>
                        <td>{{$Pelicula->des_gen}}</td>
                        <td>
                            <form>
                            </form>
                            <form action="{{ url('/MasPopulares/'.$Pelicula->id_pelicula) }}" method="POST" style="display:inline">

                                {{csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger border-0" name="eliminar" onclick="return confirm('¿Borrar a {{$Pelicula->titulo}}?');"> <i class="fas fa-trash"></i> Eliminar</button>
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
