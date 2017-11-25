<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSRF Token-->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--Title-->
        <title>Clinica Latin Lab</title>
        <!--Tab icon-->
        <link rel="icon" type="image/png" href="#" />
        <!---Styles-->
        @include('layouts.style')
    </head>
    <body class="nav-md">
      <div class="container body">
        <div class="main_container">
          <!--navigation-->
          <div class="col-md-3 left_col">
              <div class="left_col scroll-view">
                  <div class="navbar nav_title" style="border: 0;">
                      <a href="#" class="site_title"><i class="fa fa-flask"></i>
                          <span>ass</span>
                      </a>
                  </div>
                  <div class="clearfix"></div>
                  <!-- menu profile quick info -->
                  <div class="profile clearfix">
                      <div class="profile_pic">
                          <!--<img src="{{ auth()->user()->avatar }}" alt="..." class="img-circle profile_img">-->
                          <img src="" alt="..." class="img-circle profile_img">
                      </div>
                      <div class="profile_info">
                          <!--<h2>{{ auth()->user()->name }}</h2>-->
                          <h2>Alexis Holyoak</h2>
                      </div>
                  </div>
                  <!-- /menu profile quick info -->
                  <br/>
                  <!-- sidebar menu -->
                  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                      <div class="menu_section">
                          <h3>Inicio</h3>
                          <ul class="nav side-menu">
                              <li class="active">
                                  <a><i class="fa fa-home" aria-hidden="true"></i>Inicio<span class="fa fa-chevron-down"></span>

                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class="menu_section">
                          <h3>Personas</h3>
                          <ul class="nav side-menu">
                              <li>
                                  <a><i class="fa fa-users" aria-hidden="true"></i>Trabajadores<span class="fa fa-chevron-down"></span>
                                    <ul class="nav child_menu">
                                      <li><a href="#">Registros</a></li>
                                      <li><a href="#">Usuarios</a></li>
                                      <li><a href="#">Sueldos</a></li>
                                   </ul>
                                  </a>
                              </li>
                              <li>
                                  <a><i class="fa fa-users" aria-hidden="true"></i>Pacientes<span class="fa fa-chevron-down"></span>
                                    <ul class="nav child_menu">
                                      <li><a href="#">Registros</a></li>
                                      <li><a href="#">Empresas</a></li>
                                      <li><a href="#">Resultados</a></li>
                                      <li><a href="#">Reportes</a></li>
                                   </ul>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class="menu_section">
                          <h3>Grupo 3</h3>
                          <ul class="nav side-menu">
                              <li>
                                  <a>
                                      <i class="fa fa-list"></i>
                                      Menu 5
                                      <span class="fa fa-chevron-down"></span>
                                  </a>
                                  <ul class="nav child_menu">
                                      <li>
                                          <a href="#">
                                              Menu 6
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              Menu 7
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="menu_section">
                          <h3>Grupo 4</h3>
                          <ul class="nav side-menu">
                            <li>
                                <a href="http://netlicensing.io/?utm_source=Laravel_Boilerplate&utm_medium=github&utm_campaign=laravel_boilerplate&utm_content=credits" target="_blank" title="Online Software License Management"><i class="fa fa-lock" aria-hidden="true"></i>NetLicensing</a>
                            </li>
                            <li>
                                <a href="https://photolancer.zone/?utm_source=Laravel_Boilerplate&utm_medium=github&utm_campaign=laravel_boilerplate&utm_content=credits" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Photolancer Zone</a>
                            </li>
                          </ul>
                      </div>
                  </div>
                  <!-- /sidebar menu -->
              </div>
          </div>
          <!--endofnavigation-->
          <!--header-->
          <div class="top_nav">
              <div class="nav_menu">
                  <nav>
                      <div class="nav toggle">
                          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                      </div>

                      <ul class="nav navbar-nav navbar-right">
                          <li class="">
                              <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                 aria-expanded="false">
                                  <!--<img src="{{ auth()->user()->avatar }}" alt="">{{ auth()->user()->name }}-->
                                  <img src="#" alt="">AlexisHolyoak
                                  <span class=" fa fa-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu dropdown-usermenu pull-right">
                                  <li>
                                    <a href="#">Perfil</a>
                                  </li>
                                  <li>
                                      <a href="#"  onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                          <i class="fa fa-sign-out pull-right"></i>Cerrar Sesión
                                      </a>
                                      <!--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>-->
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
          <!--endofheader-->
          <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left" >
                <h1 class="h3">@yield('title')</h1>
              </div>
            </div>
            @yield('content')
          </div>
        </div>
        <!--footer-->
        <footer>
          <div class="pull-right">
              &copy;  Clinica Latin Lab
          </div>
          <div class="clearfix"></div>
        </footer>
        <!--endoffooter-->
      </div>
        @include('layouts.script')
    </body>
</html>
