@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Cargue Departamentos </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
		          <div class="panel-body">

				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

				{{ csrf_field() }}
				
				<div class="container-login98">

					<table class="table table-bordered">
						<thead class="thead-light">
							<tr>
								<th scope="col">Cod.</th>
								<th scope="col"> Nombre </th>
							</tr>
						</thead>
						<tbody class="table table-bordered">
							@foreach ( $depto as $Depto )
							<tr>
								<td scope="row">{{ $Depto->codDeprt }}</td>
								<td scope="row">{{ $Depto->nameDeprt }}</td>
							</tr>
							@endforeach
						</tbody>
						
					</table>

					<div class="form-group col-xs-12 text-center">
							
						<a href="{{route('nuevoDe')}}" class="btn btn-primary">Cargar Departamentos</a>
					
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection