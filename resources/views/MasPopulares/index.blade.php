@extends('Template/template')
@section('title', 'Mas Populares')
@section('content')
<div class="col-12" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <br>
            <h2 class="text-center card-title font-weight-normal ">Lista de Peliculas</h2>
            {{ Auth::user()->name }}{{ Auth::user()->id }}
        </div>
        <div class="col-4">
            <label>Buscar Pelicula</label>
            <form class="form-inline">
                <input type="search" name="search" placeholder="Buscar Pelicula" class="form-control" arial-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-info btn-round" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <!-- <div class="form-group col-3"> -->
            <!-- <a href="{{url('/MasPopulares')}}" class="btn mt-4 bg-info text-light">Mostrar Lista Completa</a> -->
            <!-- <a href="{{url('/RentadePeliculas')}}" class="btn btn-outline-secondary mt-4 bg-info text-light"><i class="fas fa-shopping-cart">Carrito de rentas</i></a> -->
        <!-- </div> -->
        <div class="form-group col-2">
            <a href="#espera" class="btn mt-4 bg-info text-light" aria-pressed="true" autocomplete="on"><i class="fas fa-film"> Lista de Espera</i></a>
        </div>
        <div class="form-group col-2">
            <a href="#maspeliculas" class="btn mt-4 bg-info text-light" aria-pressed="true" autocomplete="on"><i class="fas fa-film">   Peliculas Prestadas</i></a>
        </div>
        <!-- <div class="form-group col-2">
            <a href="#vistas" class="btn mt-4 bg-info text-light" aria-pressed="true" autocomplete="on"><i class="fas fa-film"> Vistas</i></a>
        </div> -->
    </div>


    <div class="row">
        @yield('contenido')
    </div>
</div>
@endsection
