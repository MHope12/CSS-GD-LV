@extends('layouts.main')

@section('main')

<form  method="POST" action="#" novalidate>

	{{ csrf_field() }}

  <div class="right_col" role="main">
     <div class="clearfix"></div>
     <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
           <div class="x_panel">
              <div class="x_title">
                 <h2>Proyectos </h2>
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
                                   <th>Rol </th>
                                   <th>Permisos Asociados</th>
                                </tr>
                             </thead>
                             <tbody>
                             @foreach ($permisrole as $permisrole)
                                <tr>
                                   <td scope="row">{{ $permisrole->Roles->nameRole}}</td>
                                   <td scope="row">{{ $permisrole->Permissions->namePermission}}</td>
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

</form>

@endsection