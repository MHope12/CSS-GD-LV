@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
	<div class="clearfix"></div>
	<div class="row">
		<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" >
		{{ csrf_field() }}
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="top_tiles">
				<div class="row">
					<div class="animated flipInY col-lg-4 col-lg-offset-2 col-md-offset-2  col-md-4 col-sm-offset-0  col-sm-6 col-xs-offset-0  col-xs-12">
						<a href="{{route('listaM')}}"><div class="tile-stats">
							<div class="icon"><i class="fa fa-envelope"></i></div>
							<div class="count">1700</div>
							<h3>Correspondencia Enviada</h3>
							<p>Correspondencia que sale de Consultecnicos para los clientes.</p>
						</div></a>
					</div>
					<div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<a href="{{route('listaM')}}"><div class="tile-stats">
							<div class="icon"><i class="fa fa-envelope"></i></div>
							<div class="count">3200</div>
							<h3>Correspondencia Recibida</h3>
							<p>Correspondencia que envían los clientes para Consultecnicos. </p>
						</div></a>
					</div>
				</div>
				<div class="row">
					<div class="animated flipInY col-lg-4 col-lg-offset-2 col-md-offset-2  col-md-4 col-sm-offset-0  col-sm-6 col-xs-offset-0  col-xs-12">
						<a href="{{route('ListaCl')}}"><div class="tile-stats">
							<div class="icon"><i class="fa fa-globe"></i></div>
							<div class="count">5</div>
							<h3>Clientes</h3>
							<p>Empresas receptoras de los beneficios que ofrece Consultecnicos. </p>
						</div></a>
					</div>
					<div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<a href="{{route('lista')}}"><div class="tile-stats">
							<div class="icon"><i class="fa fa-edit"></i></div>
							<div class="count">28</div>
							<h3>Proyectos</h3>
							<p>Actividades que Consultecnicos realiza para sus clientes. </p>
						</div></a>
					</div>
				</div>

			</div>
		</div>
		</form>
	</div>
</div>

@endsection