@extends('Template/template')
@section('title', 'Listado Socios')
@section('content')
<div class="container-fluid">
    <span class="float-right mt-2">
        <a href="{{url('/Socios/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
            <i class="fa fa-user-plus"> Registrar <br> Socio</i>
        </a>
    </span>
    <h2 class="text-center card-title font-weight-normal mt-5">Listado de Socios</h2>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Buscar Socio</label>
            <form class="form-inline">
                <input type="search" name="search" placeholder="Nombre de socio" class="form-control" arial-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-info btn-round" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <div class="form-group col-md-5 ml-5">
            <a href="{{url('/Socios')}}" class="btn btn-outline-secondary mt-4 bg-info text-light">Mostrar Lista Completa</a>
        </div>
    </div>
    <div class="table-responsive card card-body mt-5">
        <table class="table table-light" class="table table-striped table-sm">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($socios as $Socio)
                <tr>
                    <td>{{$Socio->name}}</td>
                    <td>{{$Socio->ap_paterno}}</td>
                    <td>{{$Socio->ap_materno}}</td>
                    <td>{{$Socio->dir}}</td>
                    <td>{{$Socio->telefono}}</td>
                    <td>{{$Socio->email}}</td>
                    <td>

                        <form action="{{ url('/Socios/'.$Socio->id_socio) }}" method="POST" style="display:inline">
                        <a href="{{url('/Socios/'.$Socio->id_socio.'/edit') }}" type="button" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">edit</i>Editar</a>

                            {{csrf_field() }}
                            {{ method_field('DELETE')}}
                            <button type="submit" class="btn btn-dark btn-round" name="eliminar" onclick="return confirm('¿Borrar a {{$Socio->name}} {{$Socio->ap_paterno}} {{$Socio->ap_materno}}?');"> <i class="material-icons">restore_from_trash</i>Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $socios->links() }}
    </div>
</div>
@endsection
