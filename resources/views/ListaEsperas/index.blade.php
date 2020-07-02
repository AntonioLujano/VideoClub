@extends('Template/template')
@section('title', 'Lista de Espera')
@section('content')
    <meta charset="UTF-8">
    <div class="container">
        <span class="float-right mt-2">
            <a href="{{url('/ListaEsperas/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
                <i class="fa fa-user-plus">Registrar</i>
            </a>
        </span>
        <h2 class="text-center card-title font-weight-normal mt-5">Lista de Espera</h2>
        <div class="table-responsive card card-body mt-5">
            <table class="table table-light table-hover">
                <thead class="thead-light">
                    <tr>
                        <th><center>Peliculas</th>
                        <th><center>Fecha de Pedidos</center></th>
                        <th><center>Socios</center></th>
                        <th><center>Estado</center></th>
                        <th><center>Acciones</center></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($ListaEsperas as $lista)
                            <tr>
                                <td>{{$lista->titulo}} </td>
                                <td>{{$lista->fecha_registro}}</td>
                                <td>{{$lista->nombre}} {{$lista->ap_paterno}} {{$lista->ap_materno}}</td>
                                <td>{{$lista->estado}}</td>
                                <td>
                                    <a href="#" rel="tooltip" class="btn btn-info btn-round"><i class="material-icons">edit</i>Editar</a>

                                    <form method="post" action="{{url('/ListaEsperas/destroy')}}" style="display:inline">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}  
                                        <button  rel="tooltip" class="btn btn-dark btn-round" type="submit" onclick="return confirm('Estas seguro de borrarlo?');"><i class="material-icons">restore_from_trash</i>Eliminar</button>
                                    </form>
                                </td>
                            </tr>    
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection