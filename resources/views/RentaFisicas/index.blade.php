@extends('Template/template')
@section('content')
@section('title', 'Renta de Peliculas')
<div class="container-fluid">
        <h2 class="text-center card-title font-weight-normal mt-3">Renta de Peliculas Fisicas</h2>

    <div class="form-row justify-content-end">
        <div class="form-group col-8">
            <label>Correo de socio</label>
            <input type="text " name="correo" readonly="readonly">
        </div>
        <div class="form-group col-8">
            <label>Pelicula: </label>
            <input type="text " name="" readonly="readonly">
        </div>
            <div class="form-group col-8">
                <label>Fecha de Entrega: </label>
                <input type="date" name="" class="ml-3">
            </div>
        <div class="form-group col-8">
            <label>Total a Pagar: $</label>
            <input type="text" name="" readonly="readonly">
        </div>
    </div>
</div>
@endsection
