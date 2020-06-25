@extends('Template/template')
@section('content')
    <div class="container">
        <h2 class="text-center card-title font-weight-normal mt-5">Lista de Espera</h2>
        <div class="table-responsive card card-body mt-5">
            <div class="form-group row">
                     <label for="Pelicula" class="col-md-4 col-form-label text-md-right">{{'Pelicula'}}</label>
                    <div class="col-md-6">
                        <select id="id_pelicula" class="form-control" name="Pelicula">
                            <option>Seleccionar Pelicula</option>
                        </select>
                     </div>
            </div>
            <div class="form-group row">    
                    <label for="Fecha" class="col-md-4 col-form-label text-md-right">{{'Fecha de Pedido'}}</label>
                    <div class="col-md-6">
                        <input class="form-control" type="date" name="fecha_registro">
                    </div>
            </div>
            <div class="form-group row">
                     <label for="Socio" class="col-md-4 col-form-label text-md-right">{{'Socio'}}</label>
                    <div class="col-md-6">
                        <select id="id_socio" class="form-control" name="Socio">
                            <option>Seleccionar Socio</option>
                        </select>
                     </div>
            </div>
            <div class="form-group row">
                     <label for="Estado" class="col-md-4 col-form-label text-md-right">{{'Estado'}}</label>
                    <div class="col-md-6">
                        <select id="Estado" class="form-control" name="Estado">
                            <option>Estado</option>
                        </select>
                     </div>
            </div>        
        </div>
        <br>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <a href="{{url('/ListaEsperas')}}" type="submit" rel="tooltip" class="btn btn-primary">
                            <i class="fa fa-user-plus" >{{ __('Registrar') }}</i>
                   </a>
                </div>
            </div>
    </div>
@endsection
