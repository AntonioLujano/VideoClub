@extends('Template/template')
@section('title', 'Listado Socios')
@section('content')
    <div class="container">
    <span class="float-right mt-2">
            <a href="{{url('/Socios/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
                <i class="fa fa-user-plus" >    Registrar <br> Socio</i>
            </a>
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
                    @foreach($socios as $Socio)
                <tr>
                    <td>{{$Socio->nombre}}</td>
                    <td>{{$Socio->ap_paterno}}</td>
                    <td>{{$Socio->ap_materno}}</td>
                    <td>{{$Socio->dir}}</td>
                    <td>{{$Socio->telefono}}</td>
                    <td>
                        <form action="/Socios/destroy" method="POST">
                            <a href="#" type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">edit</i>Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-dark btn-round" name="eliminar"><i class="material-icons">restore_from_trash</i>Eliminar</button>
                        </form>
                    </td>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
