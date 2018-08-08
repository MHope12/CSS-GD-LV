@extends('layouts.main')

@section('main')
<div class="limiter">
   <div class="container-login100">
      <div class="wrap-login100 p-t-65 p-b-10">
         <form class="login100-form validate-form" method="POST" action="{{ route('updatePR', [$permisrole->nPR])}}" novalidate>

            {{ method_field('PUT')}}
            {{ csrf_field() }}
                
            <span class="login100-form-title p-b-45">
               Asociación Permiso-Rol
            </span>
                    
            <div class="form-control">
                  
                  <div class="form-group">
                   <p> Permiso  </p>
                      <select class="wrap-input100 m-t-6" name="idPermission" required>
                        @foreach ($permission as $permission)
                          <option value="{{$permission->idPermission}}">{{$permission->namePermission}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                   <p> Rol de Usuario </p>
                      <select class="wrap-input100 m-t-6" name="idRole" required>
                        @foreach ($role as $Role)
                          <option value="{{$Role->idRole}}">{{$Role->nameRole}}</option>
                        @endforeach
                      </select>
                  </div>
            </div>
            <div class="container-login100-form-btn">
               <button class="btn btn-warning">Guardar</button><br>
               <a href="{{ route('permission_role.listPR')}}" class="btn btn-danger">Cancelar</a>
            </div>
            <div>
               <div class="card-footer text-muted">
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection