<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PrestaMaxx</title>

    <!-- Bootstrap -->
    <link href="plantilla/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="plantilla/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="plantilla/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="plantilla/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="plantilla/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="plantilla/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="plantilla/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="plantilla/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>PrestaMaxx</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              @if ($ruta!='')
                <img src="{{ asset($ruta) }}" alt="..." class="img-circle profile_img">
              @endif  
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ Auth::user()->usuario }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menú</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-clone"></i>Catálogos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/home') }}">Clientes</a></li>
                      <li><a href="{{ url('/home') }}">Vendedores</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Acciones <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/home') }}">Solicitar Préstamo</a></li>
                      <li><a href="{{ url('/home') }}">Registrar Abono</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('/home') }}">Clientes</a></li>
                      <li><a href="{{ url('/home') }}">Abonos</a></li> 
                      <li><a href="{{ url('/home') }}">Cobranza</a></li>
                      <li><a href="{{ url('/home') }}">Ganancias</a></li>
                      <li><a href="{{ url('/home') }}">Estado de Cuenta</a></li>
                    </ul>
                  </li>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    @if ($ruta!='')  
                      <img src="{{ asset($ruta) }}" alt="">
                    @endif
                    {{ Auth::user()->usuario }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">Mi Perfil</a></li>
                    <li><a href="javascript:;">Ayuda</a></li>
                    <li>
                      <a href="{{route('logout')}}">
                        <i class="fa fa-sign-out pull-right"></i>
                        Cerrar Sesión
                      </a>
                    </li>
                  </ul>
                </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('contenido')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            PrestaMaxx - Préstamos Fáciles, Rápidos y Seguros
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="plantilla/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plantilla/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="plantilla/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="plantilla/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="plantilla/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="plantilla/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="plantilla/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="plantilla/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="plantilla/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="plantilla/vendors/Flot/jquery.flot.js"></script>
    <script src="plantilla/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="plantilla/vendors/Flot/jquery.flot.time.js"></script>
    <script src="plantilla/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="plantilla/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="plantilla/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="plantilla/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="plantilla/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="plantilla/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="plantilla/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="plantilla/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="plantilla/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="plantilla/vendors/moment/min/moment.min.js"></script>
    <script src="plantilla/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="plantilla/build/js/custom.min.js"></script>
	
  </body>
</html>
