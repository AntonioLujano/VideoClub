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
    <br>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="totalpeliculas"># Peliculas rentadas: </label>
            <input type="text " name="" readonly="readonly" id="totalpeliculas" class="text-center">
        </div>
        <div class="form-group col-md-3">
            <label for="total">Total a Pagar: $</label>
            <input type="text" name="" readonly="readonly" id="total" class="text-center">
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
                                <a href="{{url('delete-cart/'.$details['id_pelicula'])}}" class="btn btn-danger">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach;
                    </tbody>
                    </table>
                    <script type="text/javascript">
                        var tabla=document.getElementById("carrito").rows.length;
                        var numero=document.getElementById("totalpeliculas").value=(tabla-1);
                        var suma=document.getElementById("totalpeliculas");
                        var total=document.getElementById("total").value=((tabla*50)-50);
                    </script>
                    <div class="form-group col-md-5">
                        <a href="{{route('order-detail')}}" class="btn btn-primary">Rentar</a>
                        
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </form>
</div>
@endsection