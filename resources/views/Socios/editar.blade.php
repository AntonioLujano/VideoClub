@extends('Template/template')
@section('title', 'Editar Socio')
@section('content')
<div class="container-fluid">
    <meta charset="utf-8">
    <h3 class="text-center">Editar Socio</h3>
    <div>.</div>
    <form action="{{ url('/Socios/'.$socios->id_socio)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
{{ method_field('PATCH') }}
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="txtNombre">Nombre(s):</label>
                <input name="name" type="text" class="form-control" id="txtNombre" placeholder="Nombre" value='{{$socios->name}}' >
            </div>
            <div class="form-group col-md-4">
                <label for="txtApPaterno">Apellido Paterno:</label>
                <input name="ap_paterno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno" value="{{$socios->ap_paterno}}">
            </div>
            <div class="form-group col-md-4">
                <label for="txtApMaterno">Apellido Materno:</label>
                <input name="ap_materno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno" value="{{$socios->ap_materno}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">{{ __('Correo electrónico') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required placeholder="Correo electrónico" value="{{$socios->email}}">

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="ine">INE:</label>
                <input type="text" name="" readonly="readonly" value="{{$socios->ine}}" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="ine">Comprobante:</label>
                <input type="text" name="" readonly="readonly" value="{{$socios->domicilio}}" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="txtDireccion">Dirección:</label>
                <input name="dir" type="text" class="form-control" id="txtDireccion" placeholder="Dirección" value="{{$socios->dir}}">
            </div>
            <div class="form-group col-md-4">
                <label for="txtTelefono">Telefono:</label>
                <input name="telefono" type="text" class="form-control" id="txtTelefono" placeholder="Telefono" value="{{$socios->telefono}}">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z" />
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>   INE</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="ine" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z" />
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg>   Comprobante de Domicilio</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="domicilio" class="form-control">
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-4">
                <button type="reset" class="btn btn-primary">Restablecer valores</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{url('/Socios')}}"><button type="button" class="btn btn-primary">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>
@endsection
