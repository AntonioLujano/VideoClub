@extends('Template/template')
@section('content')
    <div class="container">

        <span class="float-right mt-2">
            <a href="{{url('/ListaEsperas/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
                <i class="fa fa-user-plus" >Registrar</i>
            </a>
                </span>
        <h2 class="text-center card-title font-weight-normal mt-5">Lista de Espera</h2>
        <div class="table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Pelicula</th>
                    <th>Fecha de Pedido</th>
                    <th>Socio</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Titanic</td>
                    <td>24-06-2020</td>
                    <td>Luis Angel Faustino</td>
                    <td>Disponible</td>
                    <td>
                        <a href="{{url('/ListaEsperas/edit')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
                            <i class="material-icons">edit</i>
                            Editar
                        </a>
                        <a href="{{url('/ListaEsperas')}} "type="button" rel="tooltip" class="btn btn-dark btn-round">
                            <i class="material-icons"
                            >restore_from_trash</i>
                            Eliminar
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
