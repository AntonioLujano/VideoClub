<!doctype html>
<html lang="en">
  <head>
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
  <div class="p-3 mb-2 bg-info text-center"><h1>Cinema PRO-SIX</h1></div>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-2 d-md-block bg-info text-center sidebar collapse">
        <div class="sidebar-sticky pt-4">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-th">  Inicio</i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-user">  Usuarios</i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-film">  Peliculas</i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-users"> Actores</i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-video">  Directores</i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0" id="socio"><i class="fas fa-user-tie">  Socios</i></a>
            </li>
            <li class="nav-item">
              <a href="#" class="list-group-item list-group-item-action bg-info text-white border-0"><i class="fas fa-shopping-cart">  Prestamos</i></a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-10">
        @yield('content')
      </main>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
