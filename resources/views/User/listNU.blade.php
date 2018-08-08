
@extends('layouts.main')

@section('main')
<div class="right_col" role="main">
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                  <div class="x_title">
                     <h2>Usuarios </h2>
                     <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        
                     </ul>
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        
                           
                           <div class="x_content">
                              <table id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                 <thead>
                                    <tr>
                                       <th>No. Documento</th>
                                       <th>Nombre </th>
                                       <th>Área de trabajo</th>
                                       <th>Cargo</th>
                                       <th>Rol</th>
                                       <th>Opciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock" ><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-lock">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-unlock">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr class="locked">
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-unlock">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr >
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    <tr>
                                       <td>1049638457</td>
                                       <td>Esperanza Beltrán</td>
                                       <td>Gerencia</td>
                                       <td>Recepcionista</td>
                                       <td>Administradora</td>
                                       <td>
                                          
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                             <li><a href="ver_usuario.html">Ver</a></li>
                                             <li><a href="editar_usuario.html">Modificar</a></li>
                                             <li class="lock"><a href="#">Deshabilitar</a></li>
                                             <li class="hide unlock"><a href="#">Habilitar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                       
                                    </tr>
                                    
                                    
                                    
                                    
                                 </tbody>
                              </table>
                           </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection
