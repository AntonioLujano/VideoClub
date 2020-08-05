@extends('Template/template')
@section('content')
@section('title', 'Renta de Peliculas')

<meta charset="utf-8">
<div class="container-fluid mt-3">
    <h3 class="text-center"><i class="fas fa-shopping-cart"></i> Detalle del pedido</h3>
    <br>

    <div>
    	<div class="table-responsive">
    		<h3>Datos del usuario</h3>
    		<table class="table table-striped table-hover table-bordered">
    			<tr>
    				<td>Nombre:</td>
    				<td>{{ Auth()->user()->name }}</td>
    			</tr>
    			<tr>
    				<td>Correo:</td>
    				<td>{{ Auth()->user()->email }}</td>
    			</tr>
    			<tr>
    				<td>Fecha de entrega:</td>
    				<td>    
            			<input type="date" name="" class="text-center">
					</td>
    			</tr>
    		</table>
    	</div>
    	<div class="table-responsive">
    		<h3>Datos del pedido</h3>
    		<table class="table table-striped table-hover table-bordered" id="orden">
    			<tr>
    				<th>Pelicula</th>
    				<th>Cantidad</th>
    				<th>Precio</th>
    			</tr>
    			@if(session('cart'))
                    @foreach(session('cart') as $id => $details)
    			<tr>
    				<td>{{$details['titulo']}}</td>
    				<td>1</td>
    				<td>$50</td>
    			</tr>
    			@endforeach
    			@endif
    		</table><hr>
    		<h3>
    			<span class="label label-success">
    				Total: $
    			</span>
    			<input type="text" name="" readonly="readonly" id="total">
    		</h3><hr>
    		<p>
    			<a href=" {{ route('cart-show') }} " class="btn btn-primary">
    				<i class="fa fa-chevron-circle-left"> Regresar</i>
    			</a>

    			<a href=" # " class="btn btn-warning" style="color: rgb(255,255,255);">
    				Pagar con <i class="fa fa-paypal"></i>
    			</a>
    		</p>
    		<script type="text/javascript">
               var tabla=document.getElementById("orden").rows.length;
               var total=document.getElementById("total").value=((tabla*50)-50);
            </script>
    	</div>
    </div>
</div>

@endsection