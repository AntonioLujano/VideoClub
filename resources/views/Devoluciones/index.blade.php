@extends('Template/empleados')
@section('title','Devoluciones')
@section('content')
   <span class="float-right mt-2">
            <a href="{{url('/Devoluciones/create')}}" type="button" rel="tooltip" class="btn btn-info btn-round">
                <i class="fa fa-user-plus" >Registrar Nueva Devolucion</i>
            </a>
                </span>
                <div class="container">
        <h2 class="text-center card-title font-weight-normal mt-5">Lista de Devoluciones</h2>
        <div class="table-responsive card card-body mt-5">
            <table class="table table-light" class="table table-striped table-sm">
                <thead class="thead-light">
                <tr>
                    <th>Fecha de Renta</th>
                    <th>Fecha de Entrega</th>
                    <th>Socios</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Devoluciones as $devolucion)    
                <tr>

                    <td>{{$devolucion->fecha}}</td>
                    <td>{{$devolucion->fecha_dev}}</td>
                    <td>{{$devolucion->nombre}} {{$devolucion->ap_paterno}} {{$devolucion->ap_materno}}</td>
                    <td>
                     <a href="{{url('/Devoluciones/'.$devolucion->id_devolucion.'/edit')}}" type="button" rel="tooltip" class="btn btn-info">
                        <i class="material-icons">edit</i>Editar
                    </a>
                   <form action="{{url('/Devoluciones/'.$devolucion->id_devolucion)}}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"class="btn btn-dark" name="eliminar" onclick="return confirm('¿Estas seguro de borrarlo?');">
                                <i class="material-icons">restore_from_trash</i>Eliminar    
                            </button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
@endsection
