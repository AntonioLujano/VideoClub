@extends('Template/template')
@section('content')
    <div class="container">

        <span class="float-right mt-2">
            <button type="button" rel="tooltip" class="btn btn-info btn-round">
                <i class="fa fa-user-plus" ></i>
                Registrar <br> Socio
            </button>
                </span>

        <h2 class="text-center card-title font-weight-normal mt-5">Listado de Socios</h2>



        <div class="table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Patricia</td>
                    <td>Reyes</td>
                    <td>Reyes</td>
                    <td>Valle de Bravo</td>
                    <td>7228730075</td>
                    <td>
                        <button type="button" rel="tooltip" class="btn btn-info btn-round">
                            <i class="material-icons">edit</i>
                            Editar
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-dark btn-round">
                            <i class="material-icons"
                            >restore_from_trash</i>
                            Eliminar
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alejandro</td>
                    <td>Miguel</td>
                    <td>Cruz</td>
                    <td>Villa Victoria</td>
                    <td>7221654984</td>
                    <td>
                        <button type="button" rel="tooltip" class="btn btn-info btn-round">
                            <i class="material-icons">edit</i>
                            Editar
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-dark btn-round">
                            <i class="material-icons"
                            >restore_from_trash</i>
                            Eliminar
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Ariel</td>
                    <td>Moreno</td>
                    <td>Romualdo</td>
                    <td>Valle de Bravo</td>
                    <td>7226854415</td>
                    <td>
                        <button type="button" rel="tooltip" class="btn btn-info btn-round">
                            <i class="material-icons">edit</i>
                            Editar
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-dark btn-round">
                            <i class="material-icons"
                            >restore_from_trash</i>
                            Eliminar
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Aldo</td>
                    <td>Rodriguez</td>
                    <td>Reyes</td>
                    <td>Valle de Bravo</td>
                    <td>7284295521</td>
                    <td>
                        <button type="button" rel="tooltip" class="btn btn-info btn-round">
                            <i class="material-icons">edit</i>
                            Editar
                        </button>
                        <button type="button" rel="tooltip" class="btn btn-dark btn-round">
                            <i class="material-icons"
                            >restore_from_trash</i>
                            Eliminar
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
