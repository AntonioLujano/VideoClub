@extends('Template/template')
@section('title', 'Registro de Socios')
@section('content')
<div class="container-fluid">
    <meta charset="utf-8">
    <h3 class="centrar">Registro de Socios</h3>
    <br>
    <form class="form-group" action="/Socios" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="txtNombre">Nombre(s):</label>
                <input name="name" type="text" class="form-control" id="txtNombre" placeholder="Nombre" required>
            </div>
            <div class="form-group col-md-4">
                <label for="txtApPaterno">Apellido Paterno:</label>
                <input name="ap_paterno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Paterno" required>
            </div>
            <div class="form-group col-md-4">
                <label for="txtApMaterno">Apellido Materno:</label>
                <input name="ap_materno" type="text" class="form-control" id="txtApPaterno" placeholder="Apellido Materno" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="email">{{ __('Correo electrónico') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Correo electrónico">

                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="password">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="txtDireccion">Dirección:</label>
                <input name="dir" type="text" class="form-control" id="txtDireccion" placeholder="Dirección" required>
            </div>
            <div class="form-group col-md-4">
                <label for="txtTelefono">Telefono:</label>
                <input name="telefono" type="text" class="form-control" id="txtTelefono" placeholder="Telefono" required>
            </div>
        </div>
        <div class="form-row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z" />
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z" />
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                        </svg> INE</span>
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
                        </svg> Comprobante de Domicilio</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="domicilio" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <button type="reset" class="btn btn-primary">Limpiar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{url('MasPopulares')}}"><button type="button" class="btn btn-primary">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>
@endsection
