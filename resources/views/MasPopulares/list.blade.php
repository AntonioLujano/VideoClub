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
                    <button class="btn btn-info btn-round" type="submit">Buscar</button>
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
    <?php $id = 0 ?>
        @foreach($peliculas as $Pelicula)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" title="{{$Pelicula->titulo}}" >
            <img src="img/pelicula.png" class="card-img-top">
                <div class="card-body">
                    <label class="col-12">Titulo: {{$Pelicula->titulo}}</label>
                    <label class="col-12">Director: {{$Pelicula->nombre_dire}} {{$Pelicula->ap_paterno}} {{$Pelicula->ap_materno}}</label>
                    <label class="col-12">Genero: {{$Pelicula->des_gen}}</label>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="{{ url('/MasPopulares/'.$Pelicula->id_pelicula) }}" method="POST" style="display:inline">

                                {{csrf_field() }}
                                {{ method_field('DELETE')}}
                                <button hidden type="submit" class="btn btn-outline-primary border-0" name="eliminar" onclick="return confirm('¿Borrar a {{$Pelicula->titulo}}?');"> <i class="fas fa-thumbs-down"></i> Eliminar</button>
                                <a href="{{url('/RentadePeliculas')}}"><button type="button" class="btn btn-outline-secondary border-0"data-toggle="button" aria-pressed="false" autocomplete="off"><i class="fas fa-credit-card"> Rentar</i></button></a>
                                <button type="button" class="btn btn-outline-warning border-0" data-toggle="button" aria-pressed="false" autocomplete="off"><i class="far fa-star"> Favorita</i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
