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
                        <img src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" alt="">AlexisHolyoak
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
