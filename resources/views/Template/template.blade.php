<!doctype html>
<html lang="en">
  <head>
      <!--BOOTSTRAP E ICONOS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/all.css">

      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>


      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>App Name - @yield('title')</title>
  </head>
<body>
  <div class="p-3 mb-2 bg-info text-center card card-header"><h1 class="font-weight-bold">Cinema PRO-SIX</h1></div>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-info text-center sidebar collapse">
        <div class="sidebar-sticky pt-5">
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a href="#" class="mt-2 list-group-item list-group-item-action bg-info text-white border border-light card-link">Inicio</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="mt-2 list-group-item list-group-item-action bg-info text-white border border-light">Usuarios</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="mt-2 list-group-item list-group-item-action bg-info text-white border border-light">Peliculas</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="mt-2 list-group-item list-group-item-action bg-info text-white border border-light">Actores</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="mt-2 list-group-item list-group-item-action bg-info text-white border border-light">Directores</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="mt-2 list-group-item list-group-item-action bg-info text-white border border-light" id="socio">Socios</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="mt-2 list-group-item list-group-item-action bg-info text-white border border-light">Prestamos</a>
              </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
      @yield('content')
      </main>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
