@extends('layouts.app') 

@section('content')

<div class="top_nav">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><img src="{{('design/img/main/logo_1.png')}}"> <span>Consultecnicos</span></a>
          </div>

          <div class="clearfix"></div>

          <br><br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                       <ul class="nav side-menu">
                           <li><a><i class="fa fa-envelope-o"></i> Correspondencia <span class="fa fa-chevron-down"></span></a>
                               <ul class="nav child_menu">
                                   <li><a>C. Enviada <span class="fa fa-chevron-down"></span></a>
                                       <ul class="nav child_menu">
                                           <li><a href="{{route('send_maile_create')}}">Registrar Nueva</a></li>
                                           <li><a href="{{route('send_maile')}}">Ver Todas</a></li>
                                           <li><a href="{{route('send_maile_files')}}">Archivos adjuntos</a></li>
                                       </ul>
                                   </li>
                                   <li><a>C. Recibida <span class="fa fa-chevron-down"></span></a>
                                       <ul class="nav child_menu">
                                           <li><a href="{{route('recived_maile_create')}}">Registrar Nueva</a></li>
                                           <li><a href="{{route('recived_maile')}}">Ver Todas</a></li>
                                           <li><a href="{{route('recived_maile_files')}}">Archivos adjuntos</a></li>
                                       </ul>
                                   </li>
                               </ul>
                           </li>
                           <li><a><i class="fa fa-edit"></i> Proyectos <span class="fa fa-chevron-down"></span></a>
                               <ul class="nav child_menu">
                                   <li><a href="{{route('nuevo')}}">Registrar Nuevo</a></li>
                                   <li><a href="{{route('lista')}}">Ver Todos</a></li>
                               </ul>
                           </li>
                           <li><a><i class="fa fa-globe"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                               <ul class="nav child_menu">
                                   <li><a href="{{route('NuevoCl')}}">Registrar Nuevo</a></li>
                                   <li><a href="{{route('ListaCl')}}">Ver Todos</a></li>
                               </ul>
                           </li>
                           <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                               <ul class="nav child_menu">
                                   <li><a href="{{route('newU')}}">Registrar Nuevo</a></li>
                                   <li><a href="{{route('listaU')}}">Ver Todos</a></li>
                               </ul>
                           </li>
                           <li><a><i class="fa fa-bar-chart-o"></i> Informes <span class="fa fa-chevron-down"></span></a>
                               <ul class="nav child_menu">
                                   <li><a href="#">C. Enviada</a></li>
                                   <li><a href="#">C. Recibida</a></li>
                               </ul>
                           </li>
                       </ul>
                   </div>
            

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
                
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="iniciar_sesion.html">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                </a>
                <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                    <span class="glyphicon glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                </a>
            </div>
            <!-- /menu footer buttons -->
        </div>
    </div>
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Esperanza Beltrán
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="perfil.html"> Perfil</a></li>
                        <li><a href="javascript:;">Ayuda</a></li>
                        <li><a href="iniciar_sesion.html"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li>
                    </ul>
                </li>

                
            </ul>
        </nav>
    </div>
</div>
       <!-- /top navigation -->


       @yield('main')



   </div>
</div>
@endsection