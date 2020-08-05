@extends('Template/template')
@section('content')
@section('title', 'Renta de Peliculas')
<style type="text/css">
    .alinear{
        margin-left: 10.5em;
    }
</style>
<meta charset="utf-8">
<div class="container-fluid mt-3">
    <h3 class="text-center"><i class="fas fa-shopping-cart"></i>   Carrito de Rentas</h3>
    <div class="form-row">
        <div class="form-group col-md-5">
            
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <button type="button" class="btn btn-primary">Rentar</button>
        </div>
        <div class="form-group col-md-5">
            <label># Peliculas rentadas: </label>
            <input type="text " name="" readonly="readonly" id="totalpeliculas" class="text-center">
        </div>
        <div class="form-group col-md-5">
            <label>Total a Pagar: $</label>
            <input type="text" name="" readonly="readonly" id="total" class="text-center">
        </div>
    </div>
    <div class="form-row">
        <div class="alinear" class="form-group col-md-5">
            <label>Fecha de Entrega: </label>
            <input type="date" name="" class="ml-3">
        </div>
    </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <div class="table-sm">
                    <table class="table table-light" class="table table-striped table-sm" id="carrito">
                    <thead class="thead-light">
                        <h4 class="centrar">Peliculas Agregadas</h4>
                        <tr>
                            <th>Titulos</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                        <tr>
                            <td>{{$details['titulo']}}</td>
                            <td>1</td>
                            <td id="valor">50</td>
                            <td>
                                <button type="button" class="btn btn-outline-secondary"><svg class="bi bi-dash-circle" width="1em" height="1em" viewBox="0 0 16     16"         fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M3.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.5-.5z"/>
                            </svg> Quitar</button>
                            </td>
                        </tr>
                        @endforeach;
                    @endif
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    var tabla=document.getElementById("carrito").rows.length;
    var numero=document.getElementById("totalpeliculas").value=tabla;
    var suma=document.getElementById("valor");
    var total=document.getElementById("total").value=(suma+=suma);
</script>
@endsection