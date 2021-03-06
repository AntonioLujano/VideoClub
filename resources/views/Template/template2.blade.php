@extends('layouts.app')
@section('conten')
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-2 d-md-block bg-info  sidebar collapse">
            <div class="position-fixed" class="sidebar-sticky pt-4">
                <ul class="nav flex-column">

                    @if($id === 1)
                    <li class="nav-item">
                        <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-user"> Usuarios</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/Peliculas')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-film"> Peliculas</i></a>
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
                    @elseif($id === 2)
                    <li class="nav-item">
                        <a href="{{url('/RentadePeliculas')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-shopping-cart"> Rentas</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/Renta')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-shopping-cart"> Renta Fisica</i></a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/Devoluciones')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-handshake"> Devoluciones</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-money-bill-wave"> Deudas</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/ListaEsperas')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-list-alt"> Lista de Espera</i></a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{url('/MasPopulares')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-th"> Inicio</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/Actores')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-users"> Actores</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/Actores')}}" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-users"> Actores</i></a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
        <main role="main" class="col-10">
            @yield('content')
        </main>
    </div>
</div>

@endsection
