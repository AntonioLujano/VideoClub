
@extends('Template/template')
@section('title', 'Mas Populares')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="text-center card-title font-weight-normal mt-5">Mas Populares</h2>
        </div>
        <div class="col-2">
            <a href="#" class="btn btn-outline-secondary mt-5 bg-info text-light"><i class="fas fa-reply">  Regresar</i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                    <tr>
                        <th>Titulos</th>
                        <th>Directores</th>
                        <th>Generos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Titulo 1</td>
                        <td>Director 1</td>
                        <td>Genero 1</td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-credit-card">  Rentar</i></button>
                            <button type="button" class="btn btn-outline-primary border-0"><i class="fas fa-thumbs-down">    Eliminar</i></button>
                            <button type="button" class="btn btn-outline-warning border-0"><i class="far fa-star">   Favorita</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Titulo 2</td>
                        <td>Director 2</td>
                        <td>Genero 2</td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-credit-card">  Rentar</i></button>
                            <button type="button" class="btn btn-outline-primary border-0"><i class="fas fa-thumbs-down">    Eliminar</i></button>
                            <button type="button" class="btn btn-outline-warning border-0"><i class="far fa-star">   Favorita</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Titulo 3</td>
                        <td>Director 3</td>
                        <td>Genero 3</td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-credit-card">  Rentar</i></button>
                            <button type="button" class="btn btn-outline-primary border-0"><i class="fas fa-thumbs-down">    Eliminar</i></button>
                            <button type="button" class="btn btn-outline-warning border-0"><i class="far fa-star">   Favorita</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Titulo 4</td>
                        <td>Director 4</td>
                        <td>Genero 4</td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-credit-card">  Rentar</i></button>
                            <button type="button" class="btn btn-outline-primary border-0"><i class="fas fa-thumbs-down">    Eliminar</i></button>
                            <button type="button" class="btn btn-outline-warning border-0"><i class="far fa-star">   Favorita</i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Titulo 5</td>
                        <td>Director 5</td>
                        <td>Genero 5</td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-credit-card">  Rentar</i></button>
                            <button type="button" class="btn btn-outline-primary border-0"><i class="fas fa-thumbs-down">    Eliminar</i></button>
                            <button type="button" class="btn btn-outline-warning border-0"><i class="far fa-star">   Favorita</i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
