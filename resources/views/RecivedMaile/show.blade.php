@extends('layouts.main')

@section('main')


		<div class="right_col" role="main">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Ver Correspondencia Recibida <small>CO-1002-2002</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								 <li><a href="{{route('recived_maile_edit')}}" class="collapse-link"><i class="fa fa-wrench"></i></a>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="row">
								<div class="form-group col-xs-12  col-md-4">
									<label class="control-label" for="first-name">Consecutivo</label>
									<p>CO-1002-2002</p>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-12 col-md-4">
									<label class="control-label" for="first-name">Fecha de recibido</label>
									<p>07/01/2018</p>
								</div>
								<div class="form-group col-xs-12 col-md-4">
									<label class="control-label" for="first-name">Hora de recibido</label>
									<p>05:15 pm</p>
								</div>
								<div class="form-group col-xs-12 col-md-4">
									<label class="control-label" for="first-name">Ciudad</label>
									<p>Bogotá</p>
								</div>
							</div>
							<div class="row">
								
							
								<div class="form-group col-xs-12 col-md-4">
									<label class="control-label" for="first-name">Remitente</label>
									<p>Juan Carlos</p>
								</div>
								<div class="form-group col-xs-12 col-md-4">
									<label class="control-label">Cliente</label>
									<p>Cliente 1</p>
								</div>
								<div class="form-group col-xs-12 col-md-4">
									<label class="control-label">Proyecto</label>
									<p>Proyecto 4</p>
									
								</div>
							</div>
							<div class="row">
								<div class="form-group  col-xs-12 col-md-6">
									<label class="control-label ">Destinatario</label>
									<p>Destinatario area de trabajo</p>
								</div>
								<div class="form-group col-xs-12 col-md-6">
									<label class="control-label"><br></label>
									<p>Destinatario usuario</p>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-12 col-md-4">
									<label class="control-label" for="last-name">Asunto</label>
									<p>Asunto</p>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-12">
									<label class="control-label" for="last-name">Observaciones</label>
									<p>Obervaciones blablabla</p>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6 col-xs-12">
									<label class="control-label">Formato</label>
									<p>Formato</p>
									
								</div>
								<div class="form-group col-md-6 col-xs-12">
									<label class="control-label" for="last-name">Número de folios</label>
									<p>No.</p>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-6 col-xs-12">
									<label class="control-label" for="last-name">Empresa de mensajería</label>
									<p>Servientrega</p>
									
								</div>
								<div class="form-group col-md-6 col-xs-12">
									<label class="control-label" for="last-name">Mensajero</label>
									<p>Servientrega</p>

								</div>
							</div>
												
							<div class="ln_solid"></div>
							<div class="row">
								<div class="form-group  col-xs-12 text-left">
									<a href="">Archivo adjunto</a>
								</div>
							</div>	
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection