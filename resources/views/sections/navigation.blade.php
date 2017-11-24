<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-flask"></i>
                <span>{{ config('app.name') }}</span>
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
