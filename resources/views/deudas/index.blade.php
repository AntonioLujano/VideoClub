@extends('Template/template')
@section('content')
    <div class="container">
        <h2 class="text-center card-title font-weight-normal mt-5">Lista de Adeudos</h2>
        <div class="table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Pelicula</th>
                    <th>Fecha de Renta</th>
                    <th>Fecha de Entrega</th>
                    <th>Socios</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Titanic</td>
                    <td>22/05/2020</td>
                    <td>23/05/2020</td>
                    <td>Ramiro Gutierrez de Paz</td>
                    <td>
                     <a href="{{url('/deudas/edit')}}" type="button" rel="tooltip" class="btn btn-primary btn-round">Editar
                    </a>
                    <a href="{{url('/deudas/delete')}} "type="button" rel="tooltip" class="btn btn-danger btn-round">Eliminar
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>Iron man 2</td>
                    <td>10/02/2020</td>
                    <td>15/02/2020</td>
                    <td>Ramiro Gutierrez de Paz</td>
                    <td>
                     <a href="{{url('/deudas/edit')}}" type="button" rel="tooltip" class="btn btn-primary btn-round">Editar
                    </a>
                    <a href="{{url('/deudas/delete')}} "type="button" rel="tooltip" class="btn btn-danger btn-round">Eliminar
                    </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection