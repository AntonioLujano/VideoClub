@extends('Template/empleados')
@section('content')
    <div class="container">
        <h2 class="text-center card-title font-weight-normal mt-5">NUEVA DEVOLUCION</h2>
        <div class="table-responsive card card-body mt-5">

        <div class="form-group">
            <label for="my-select">Selecione Pelicula</label>
            <select id="my-select" class="form-control" name="">
                <option>Seleccionar Pelicula</option>
                    @foreach ($peliculas as $pelicula)
                        <option value="{{ $pelicula['id_pelicula'] }}">{{ $pelicula['titulo'] }}</option>
                    @endforeach
            </select>
            <br>
            <label for="">Numero de copias</label>
            <input class="form-control" type="number" name="">
            <br>
            <label for="my-select">Selecione un socio</label>
            <select id="my-select" class="form-control" name="">
                <option>Seleccionar Socio</option>
                    @foreach ($socios as $socio)
                        <option value="{{ $socio['id_socio'] }}">{{ $socio['name'] }}</option>
                    @endforeach
            </select>
            <br>
            <button class="btn btn-danger" type="button">Limpiar</button>

            <button class="btn btn-success" type="button">Guardar</button>

        </div>

        </div>
    </div>
@endsection
