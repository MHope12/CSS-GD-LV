@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
         <div class="clearfix"></div>
         <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="x_panel">
                  <div class="x_title">
                     <h2>Correspondencia <small>Enviada</small></h2>
                     <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        
                     </ul>
                     <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                     
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        
                           
                           <div class="x_content">
                              <table id="datatable-responsive" class="treetable table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                 <thead>
                                    <tr>
                                       
                                       <th>Consecutivo </th>
                                       
                                       <th>Fecha</th>
                                       <th>Asunto</th>
                                       <th >Proyecto</th>
                                       <th >Cliente</th>

                                       <th>Opciones</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($mail as $mailes)
                                    <tr data-tt-id="2" class="branch ">
                                       
                                       <td >{{$mailes->idMail}}</td>
                                       <td >{{$mailes->sentDate}}</td>
                                       <td class="subject">
                                          {{$mailes->affair}}
                                       </td>
                                       <td >{{$mailes->folder_id}}</td>
                                       <td >{{$mailes->dependency_id}}</td>
                                       <td >
                                          <div class="dropdown">
                                             <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-ellipsis-v"></i>
                                             </button>
                                             <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="{{route('send_maile_show')}}">Ver</a></li>
                                                <li><a href="{{route('send_maile_edit')}}">Modificar</a></li>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


@endsection