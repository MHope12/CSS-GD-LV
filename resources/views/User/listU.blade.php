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

          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">

            {{ csrf_field() }}
          
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_content">
                  <table id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>No. Documento</th>
                        <th>Nombre(s)</th>
                        <th>Dependencia</th>
                        <th>Cargo</th>
                        <th>Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($user as $User)
                      <tr>
                        <td>{{$User->idUser}}</td>
                        <td>{{$User->codPerson}}</td>
                        <td>{{$User->namePerson}} {{$User->lastnamePerson}}</td>
                        <td>{{ $User->Dependency->nameDependency}}</td>
                        <td>{{ $User->TypePerson->nameTypePerson}}</td>
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
                      @endforeach
                    </tbody>
                  </table>
                </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection