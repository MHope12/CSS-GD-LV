@extends('layouts.main')

@section('content')
<div class="container">
   <div class="wrapper-dashboard">
      <form method="POST">
         <div class="container text-center">
         	<div class="row content-card justify-content-md-center">
               <div class="col-sm-4 text-center border-primary">
                  <div class="card border-primary" style="width: 18rem;">
                     <div class="card-body text-primary">
                        <h5 class="card-title">Cargo</h5>
                        <a href="{{route('typePerson')}}" class=" btn btn-link">Ver</a>
                     </div>
                  </div>
               </div>

               <div class="col-sm-4 text-center border-primary">
                  <div class="card border-primary" style="width: 18rem;">
                     <div class="card-body text-primary">
                        <h5 class="card-title">Formato Documento</h5>
                        <a href="{{route('storagew')}}" class="btn btn-link">Ver</a>
                     </div>
                  </div>
               </div>

         		<div class="col-sm-4 text-center border-primary">
         			<div class="card border-primary" style="width: 18rem;">
         				<div class="card-body text-primary">
         					<h5 class="card-title">Asignar Permiso a Rol </h5>
                        <a href="{{route('permission_role')}}" class="btn btn-link">Ver</a>
         				</div>
         			</div>
         		</div>
         	</div>

         	<div class="row content-card  justify-content-md-center">
               <div class="col-sm-4 text-center border-primary">
                  <div class="card border-primary" style="width: 18rem;">
                     <div class="card-body text-primary">
                        <h5 class="card-title">Roles del Sistema</h5>
                        <a href="{{ route('role')}}" class="btn btn-link">Ver</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-4 text-center border-primary">
                  <div class="card border-primary" style="width: 18rem;">
                     <div class="card-body text-primary">
                        <h5 class="card-title">Permisos del Sistema</h5>
                        <a href="{{ route('permission')}}" class="btn btn-link">Ver</a>
                     </div>
                  </div>
               </div>
         		<div class="col-sm-4 text-center border-primary">
         			<div class="card border-primary" style="width: 18rem;">
         				<div class="card-body text-primary">
         					<h5 class="card-title">Asociar Rol a Usuario </h5>
                        <a href="{{ route('roleuser')}}" class="btn btn-link">Ver</a>
         				</div>
         			</div>
         		</div>
         	</div>
         </div>
      </form>
   </div>
</div>
@endsection