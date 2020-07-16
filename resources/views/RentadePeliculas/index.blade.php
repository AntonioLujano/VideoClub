@extends('Template/template')
@section('content')
@section('title', 'Renta de Peliculas')
<meta charset="utf-8">
<div class="container-fluid">
    <h3 class="text-center"><i class="fas fa-shopping-cart"></i>   Carrito de Rentas</h3>
    <div class="form-row">
        <div class="form-group col-md-5">
            
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
            <div class="form-group col-md-12">
                <div class="table-sm">
                    <table class="table table-light" class="table table-striped table-sm">
                    <thead class="thead-light">
                        <h4 class="centrar">Peliculas Agregadas</h4>
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