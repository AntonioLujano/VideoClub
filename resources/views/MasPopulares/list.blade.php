@extends('MasPopulares/index')
@section('contenido')
<div class="col-12" class="container-fluid">
    <hr>
    <span class="shadow p-4 bg-info rounded d-block text-white"><label>Mas Peliculas    ({{count($peliculas)}})</label></span>
    <hr>
    <div class="row">
        @foreach($peliculas as $Pelicula)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" title="{{$Pelicula->titulo}}">
                <img src="img/pelicula.png" class="card-img-top">
                <!-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rqmHSR0bFU8?controls=0" allowfullscreen></iframe>
                </div> -->
                <div class="card-body">
                    <label class="col-12">Titulo: {{$Pelicula->titulo}}</label>
                    <label class="col-10">Director: {{$Pelicula->nombre_dire}} {{$Pelicula->ap_paterno}} {{$Pelicula->ap_materno}}</label>
                    <label class="col-12">Genero: {{$Pelicula->des_gen}}</label>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form class="form-inline col">
                                <!--<input type="text" name="rentar" value="{{$Pelicula->id_pelicula}}" hidden> -->
                                <a href="{{url('add-to-cart/'.$Pelicula->id_pelicula)}}" class="btn btn-outline-secondary btn-round" role="button" aria-pressed="true"><i class="fa fa-credit-card"></i> Rentar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div id="gf"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <div class="shadow p-4 bg-info rounded d-block text-white"><label class="col-11" for="">Recomendaciones Según su Genero Favorito {{count($listargen)}} Coincidencias de {{count($peliculas)}} Titulos</label><a href="{{url('/MasPopulares')}}" class="btn btn-secondary border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-arrow-alt-circle-up"></i></a></div>
    <hr>
    <div class="row">
        @if(count($listargen)>0)
        @foreach($listargen as $listag)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" title="{{$listag->titulo}}">
                <img src="img/pelicula.png" class="card-img-top">
                <!-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rqmHSR0bFU8?controls=0" allowfullscreen></iframe>
                </div> -->
                <div class="card-body">
                    <label class="col-12">Titulo: {{$listag->titulo}}</label>
                    <label class="col-12">Director: {{$listag->nombre_dire}} {{$listag->ap_paterno}} {{$listag->ap_materno}}</label>
                    <label class="col-12">Genero: {{$listag->des_gen}}</label>
                    <hr>
                    <div class="d-flex justify-content-between ">
                        <form class="form-inline col-5">
                            <input type="text" name="rentar" value="{{$listag->id_pelicula}}" hidden>
                            <button class="btn btn-outline-secondary btn-round" type="submit">Renta<i class="material-icons"></i></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        sin resultados
        @endif
    </div>
    <div id="df"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <div class="shadow p-4 bg-info rounded d-block text-white"><label class="col-11" for="">Recomendaciones Según su Director Favorito {{count($listardir)}} Coincidencias de {{count($peliculas)}} Titulos</label><a href="{{url('/MasPopulares')}}" class="btn btn-secondary border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-arrow-alt-circle-up"></i></a></div>
    <hr>
    <div class="row">
        @if(count($listardir)>0)
        @foreach($listardir as $listad)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" title="{{$listad->titulo}}">
                <img src="img/pelicula.png" class="card-img-top">
                <!-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rqmHSR0bFU8?controls=0" allowfullscreen></iframe>
                </div> -->
                <div class="card-body">
                    <label class="col-12">Titulo: {{$listad->titulo}}</label>
                    <label class="col-12">Director: {{$listad->nombre_dire}} {{$listad->ap_paterno}} {{$listad->ap_materno}}</label>
                    <label class="col-12">Genero: {{$listad->des_gen}}</label>
                    <hr>
                    <div class="d-flex justify-content-between ">
                        <form class="form-inline col-5">
                            <input type="text" name="rentar" value="{{$listad->id_pelicula}}" hidden>
                            <button class="btn btn-outline-secondary btn-round" type="submit">Renta<i class="material-icons"></i></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        sin resultados
        @endif
    </div>
    <div id="espera"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <div class="shadow p-4 bg-info rounded d-block text-white"><label class="col-11" for="">Lista de Espera</label><a href="{{url('/MasPopulares')}}" class="btn btn-secondary border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-arrow-alt-circle-up"></i></a></div>
    <hr>
    <div class="row">
        @if(count($peliculas)<=0)
        @foreach($espera as $lista)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" title="{{$lista->titulo}}">
                <img src="img/pelicula.png" class="card-img-top">
                <!-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rqmHSR0bFU8?controls=0" allowfullscreen></iframe>
                </div> -->
                <div class="card-body">
                    <label class="col-12">Titulo: {{$lista->titulo}}</label>
                    <label class="col-12">Director: {{$lista->nombre_dire}} {{$lista->ap_paterno}} {{$lista->ap_materno}}</label>
                    <label class="col-12">Genero: {{$lista->des_gen}}</label>
                    <hr>
                    <div class="d-flex justify-content-between ">
                        <div class="btn-group">
                            <label for="" class=" bg-outline-secondary border-1">{{$lista->estado}}</label>
                        </div>
                        <form class="form-inline col-5">
                            @if($lista->estado=="Disponible")
                            <input type="text" name="espera" value="{{$lista->id_espera}}" hidden>
                            <button class="btn btn-outline-secondary btn-round" type="submit">Renta<i class="material-icons"></i></button>
                            @else
                            <input type="text" name="noesperar" value="{{$lista->id_espera}}" hidden>
                            <button class="btn btn-outline-danger btn-round" type="submit">Quitar<i class="material-icons"></i></button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="row">
            <div class="col-12">sin resultados</div>
        </div>
        @endif
    </div>
    <div id="maspeliculas"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <span class="shadow p-4 bg-info rounded d-block text-white"><label class="col-11" for="">Peliculas Prestadas</label><a href="{{url('/MasPopulares')}}" class="btn btn-secondary border-0" aria-pressed="false" autocomplete="off"><i class="fas fa-arrow-alt-circle-up"></i></a></span>
    <hr>
    <div class="row">
        @foreach($prestadas as $prestada)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm" title="{{$prestada->titulo}}">
                <img src="img/pelicula.png" class="card-img-top">
                <!-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rqmHSR0bFU8?controls=0" allowfullscreen></iframe>
                </div> -->
                <div class="card-body">
                    <label class="col-12">Titulo: {{$prestada->titulo}}</label>
                    <label class="col-12">Director: {{$prestada->nombre_dire}} {{$prestada->ap_paterno}} {{$prestada->ap_materno}}</label>
                    <label class="col-12">Genero: {{$prestada->des_gen}}</label>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form class="form-inline col">
                                <input type="text" name="devolver" value="{{$prestada->id_pelicula}}" hidden>
                                <button class="btn btn-outline-primary btn-round" type="submit">Devolver</button>
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
