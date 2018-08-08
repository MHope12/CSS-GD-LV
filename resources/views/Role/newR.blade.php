@extends('layouts.main')

@section('main')

<form class="login100-form validate-form" method="POST" action=" " novalidate>
      {{ csrf_field() }}
      <div class="limiter">
         <div class="container-login100">
            <div class="wrap-login100 p-t-65 p-b-10">
                      
                  <span class="login100-form-title p-b-45">
                     Registro Rol
                  </span>
                          
                  <div class="form-control">
                     <div class="wrap-input100 validate-input m-t-6">
                        <input class="input100" type="text" name="nameRole" placeholder="Nombre" required>
                     </div>

                     <div class="container-login100-form-btn">
                        <button class="btn btn-warning">Guardar</button>
                     </div>

                     <div class="container-login100-form-btn">
                        <a href="" class="btn btn-danger">Cancelar</a>
                     </div>   
                  </div>
               </form>
            </div>
         </div>
      </div>
</form>


@endsection