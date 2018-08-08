@extends('layouts.main')

@section('main')
<form class="login100-form validate-form" method="POST" action="{{route('storePR')}}" novalidate>
    {{ csrf_field() }}
    <div class="row justify-content-center main-container">
      <div class="col-sm-11">
        <h1 class="text-center text-uppercase">Roles</h1> <br>  
        <div class="col-sm-12">
          <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Rol </button>
          <div class="row">
            <div class="col-sm-12">
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <form  class="needs-validation" novalidate>
                    <div class="row">
                      <div class="col-sm-12 col-md-5 form-group text-left">
                        <label for="" class="col-sm-12 col-lg-4 col-form-label">Rol <sup>*</sup></label>
                        <div class="col-sm-10 col-lg-8">
                          <select class="form-control custom-select" name="idRole">
                          @foreach ($role as $Role)
                             <option value="{{$Role->idRole}}">{{$Role->nameRole}}</option>
                          @endforeach
                          </select>
                          <div class="invalid-feedback">
                            Por favor ingrese el área de trabajo
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 form-group text-center">
                        <p class="text-left col-sm-12 ">Permisos*</p>
                        <div>
                          <br>
                        </div>
                            <div class="row">
                              @foreach ($permission as $permission)
                              <div class="form-check col-sm-10 col-lg-3">   
                                <input class="form-check-input" type="checkbox" value="{{$permission->idPermission}}" id="idPermission"   name="idPermission[]">
                                <label class="form-check-label" for="idPermission">
                               {{$permission->namePermission}}
                                </label>
                              </div>
                              @endforeach
                            </div>
                        <div class="col-sm-12 form-group text-left">
                          <br>
                          <small><sup>*</sup> Campos obligatorios</small>
                        </div>
                        <div class="col-sm-12 col-md-12 form-group text-center ">
                          <div class="row justify-content-center">
                            <div class="col-sm-10 col-lg-4 text-center">
                            <button class="btn btn-info">Guardar</button>
                            <a href="{{route('mainboard')}}" class="btn btn-light">Cancelar</a>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-11">
        <br><br>
        <div>
          <div class="card">
            <div class="card-header" id="headingOne" value="{{$Role->idRole}}">
              <h6 class="mb-0" data-toggle="collapse" data-target="#superadmin" aria-expanded="true" aria-controls="superadmin">
              <a href=""><i class="fas fa-pencil-alt float-right"></i></a>Ver Todos
              </h6>
            </div>
            <div id="superadmin" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p><strong>Permisos</strong></p>
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-lg-4 col-form-label">Escoja un rol</label>
                  <div class="col-sm-10 col-lg-8">
                    <select class="form-control custom-select" name="idRole">
                    @foreach ($role as $Role)
                       <option value="{{$Role->idRole}}">{{$Role->nameRole}}</option>
                    @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-sm-12 form-group text-center">
                  <div class="row">
                    <div class="col-sm-12 col-md-3 text-left">
                      <p  class="text-left col-sm-12 permission-title">Permisos</p>
                    </div>
                    @foreach ($permission as $permis)
                      @if ($Role->idRole == $permission->idPermission)
                      <div class="col-sm-12 col-md-9 text-left">
                        <ul class="permission">
                          <li>{{$permission->namePermission}}</li>
                        </ul> 
                      </div>
                      @endif
                    @endforeach
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
</form>
@endsection