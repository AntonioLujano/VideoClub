@extends('Template/template')
@section('content')
@section('title', 'Renta de Peliculas')
<meta charset="utf-8">
<div class="container-fluid">
    <h3 class="centrar">Renta de películas</h3>
    <form>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="txtNombre">Nombre(s):</label>
                <input type="text" class="form-control" id="txtNombre" placeholder="Nombre">
            </div>

            <div class="form-group col-md-2">
                <label for="txtApPaterno">Apellido Paterno:</label>
                <input type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno">
            </div>

            <div class="form-group col-md-2">
                <label for="txtApMaterno">Apellido Materno:</label>
                <input type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno">
            </div>

            <div class="form-group col-md-2">
                <label for="txtDireccion">Fecha de renta</label>
                <input type="text" class="form-control" id="txtFechaRen" placeholder="Fecha de renta">
            </div>

            <div class="form-group col-md-3">
                <label for="txtTelefono">Fecha de devolución:</label>
                <input type="text" class="form-control" id="txtFechaDev" placeholder="Fecha de devolución">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="txtTelefono">Películas:</label>
                <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg>
                <input type="text" class="form-control" id="txtPelis"  placeholder="Buscar...">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <button type="button" class="btn btn-primary">Buscar</button>
                <button type="button" class="btn btn-secondary">Limpiar</button>
                <button type="button" class="btn btn-secondary">Guardar</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <div class="table-sm">
                    <table class="table table-light" class="table table-striped table-sm">
                    <thead class="thead-light">
                        <tr>
                            <th>Titulo</th>
                            <th>Directores</th>
                            <th>Genero</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelicula as $Pelicula)
                        <tr>
                            <td>{{$Pelicula->titulo}}</td>
                            <td>{{$Pelicula->nombre}} {{$Pelicula->ap_paterno}} {{$Paterno->ap_materno}}</td>
                            <td>{{$Paterno->des_genero}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-secondary"><svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16     16"         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
                                <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> 
                                </svg> Añadir </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
    
            <div class="form-group col-md-6">
                <div class="table-sm">
                    <table class="table table-light" class="table table-striped table-sm">
                    <thead class="thead-light">
                        <h4 class="centrar">Agregadas</h4>
                        <tr>
                            <th>Titulos</th>
                            <th>Directores</th>
                            <th>Generos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alien Cavanat</td>
                            <td>James Francis</td>
                            <td>Ciencia Ficción</td>
                            <td>
                                <button type="button" class="btn btn-outline-secondary"><svg class="bi bi-dash-circle" width="1em" height="1em" viewBox="0 0 16     16"         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M3.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.5-.5z"/>
                            </svg> Quitar</button>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection