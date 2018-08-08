@extends('layouts.main')

@section('main')
<div class="row justify-content-center main-container">
	<div class="col-sm-12 col-md-8 col-lg-6 text-left">
		
		<h1 class="text-center text-uppercase">Mi Perfil</h1> <br>
		<div>
			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Nombre(s) y Apellido(s): </strong></p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->namePerson}}  {{Auth::user()->lastnamePerson}}</p>
			</div>
			
			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Número de documento: </strong> </p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->codPerson}}</p>
			</div>

			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Correo electrónico:</strong> </p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->email}}</p>
			</div>
			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Área de trabajo:</strong> </p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->Dependency->nameDependency}}</p>
				
			</div>
			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Cargo:</strong> </p>
				<p for="" class="col-sm-6 text-left">{{Auth::user()->TypePerson->nameTypePerson}}</p>				
			</div>

			<div class="form-group row justify-content-center">
				<p for="" class="col-sm-6 text-left"><strong>Rol:</strong> </p>
				<p for="" class="col-sm-6 text-left">Administrador</p>
			</div>

			<div class="text-center ">
				<br><small> Si desea modificar algún dato, comuníquese con <a href="mailto:admin@admin.com">admin@admin.com</a> o <a href="tel:010101">01010101</a></small>
			</div>

		</div>
			<div>
				<a href="{{route('mainboard')}}" class="col-sm-6 text-left">Home</a>
			</div>
	</div>
</div>
@endsection