@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Modificar Proyecto <small>proyecto 1</small> </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
						 <li><a href="editar_proyecto.html" class="collapse-link"><i class="fa fa-wrench"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					
					<form  class="form-horizontal form-label-left" data-parsley-validate method="POST" action="{{ route('updateF', [$folder->idFolder]) }}">
				
						{{ method_field('PUT')}}
						{{ csrf_field() }}
						
						<div class="row">
							<div class="form-group col-xs-12 col-md-6">
								<label class="control-label" for="last-name">Nombre<span class="required">*</span></label>
								<input type="text" value="{{$folder->nameFolder}}" name="nameFolder" required="required" data-parsley-required-message="Este campo es obligatorio" class="form-control">
							</div>
							<div class="form-group col-md-6 col-xs-12">
								<label class="control-label">Cliente</label>
								<select class="select2_single form-control" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio" name="idClient">
									@foreach ($client as $Client)
					                   <option value="{{$Client->idClient}}">{{$Client->nameClient}}</option>
										<option value="">Selecciona un cliente</option>
					                @endforeach
								</select>
							</div>
						</div>				
					
						<div class="row">
							<div class="form-group text-left">
								<small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
							</div>
						</div>					
						<div class="ln_solid"></div>
						<div class="row">
							<div class="form-group col-xs-12 text-center">
							
								<a class="btn btn-primary" class="button">Cancelar</a>
								<button  class="btn btn-success">Guardar</button>
							
						</div>
						</div>
						

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection