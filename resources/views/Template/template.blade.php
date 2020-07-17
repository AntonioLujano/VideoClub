@extends('layouts.app')
@section('conten')

<!doctype html>
<html lang="es">

<head>
    <!--BOOTSTRAP E ICONOS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font awesome Iconos-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Titulo cambia de acuerdo a la vista -->
    <title>@yield('title','Inicio')</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-2 d-md-block bg-info text-center sidebar collapse">
                <div class="sidebar-sticky pt-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{url('/MasPopulares')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-th"> Inicio</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-user"> Usuarios</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-film"> Peliculas</i></a>
                            </li>
                        <li class="nav-item">
                            <a href="{{url('/Generos')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-photo-video"> Generos</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/Actores')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-users"> Actores</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/Directores')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-video"> Directores</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/Socios')}}" class="list-group-item list-group-item-action bg-info text-white border-0" id="socio"><i class="fas fa-user-tie"> Socios</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/RentadePeliculas')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-shopping-cart"> Prestamos</i></a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-handshake"> Devoluciones</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-money-bill-wave"> Deudas</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/ListaEsperas')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-list-alt"> Lista de Espera</i></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-10">
                @yield('content')
            </main>
  <!-- <div class="p-3 bg-info text-center card card-header">
    <h1 class="font-weight-bold text-center">Cinema PRO-SIX</h1>
  </div> -->

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>

@endsection
