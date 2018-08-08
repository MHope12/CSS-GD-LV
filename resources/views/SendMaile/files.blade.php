@extends('layouts.main')

@section('main')

	<div class="right_col" role="main">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Archivos de correspondencia <small>Enviada</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							
							<div class="col-md-12 col-sm-12 col-xs-12">
								
									
									<div class="x_content">
										<table id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th >Proyecto</th>
													<th >Cliente</th>
													<th>Consecutivo </th>
													
													<th>Fecha</th>
													<th>Asunto</th>
													<th>Opciones</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td >Proyecto 1</td>
													<td >Cliente 1</td>
													<td>1049638457</td>
													
													<td>01/02/2015</td>
													<td><a href="" target="_blank">Asunto blablabla</a></td>
													<td>
														<div class="dropdown">
															<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																<i class="fa fa-ellipsis-v"></i>
															</button>
															<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
																<li><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-upload">Cargar Archivo</a></li>
																<li><a href="{{route('send_maile_show')}}">Ver</a></li>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td >Proyecto 1</td>
													<td >Cliente 1</td>
													<td>1049638457</td>
													
													<td>01/02/2015</td>
													<td><a href="" target="_blank">Asunto blablabla</a></td>
													<td>
														<div class="dropdown">
															<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																<i class="fa fa-ellipsis-v"></i>
															</button>
															<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
																<li><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-upload">Cargar Archivo</a></li>
																<li><a href="{{route('send_maile_show')}}">Ver</a></li>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td >Proyecto 1</td>
													<td >Cliente 1</td>
													<td>1049638457</td>
													
													<td>01/02/2015</td>
													<td><a href="" target="_blank">Asunto blablabla</a></td>
													<td>
														<div class="dropdown">
															<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																<i class="fa fa-ellipsis-v"></i>
															</button>
															<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
																<li><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-upload">Cargar Archivo</a></li>
																<li><a href="{{route('send_maile_show')}}">Ver</a></li>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td >Proyecto 1</td>
													<td >Cliente 1</td>
													<td>1049638457</td>
													
													<td>01/02/2015</td>
													<td><a href="" target="_blank">Asunto blablabla</a></td>
													<td>
														<div class="dropdown">
															<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																<i class="fa fa-ellipsis-v"></i>
															</button>
															<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
																<li><a href="javascript:void(0)" data-toggle="modal" data-target=".modal-upload">Cargar Archivo</a></li>
																<li><a href="{{route('send_maile_show')}}">Ver</a></li>
															</div>
														</div>
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade modal-upload" tabindex="-1" role="dialog" aria-labelledby="modal-upload" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<form  class="needs-validation" data-parsley-validate  >
				<div class="modal-header">
					<span class="modal-title" id="exampleModalLongTitle">Cargar Archivo Adjunto</span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="form-group text-left col-xs-10">
							<input type="text" class="form-control"  placeholder="Consecutivo"  required="required" data-parsley-required-message="Este campo es obligatorio">
						</div>
						<div class="form-group custom-file text-left col-xs-10">
							<br>
							<input type="file" class="custom-file-input" id="customFileLang" lang="es"  required="required" data-parsley-required-message="Este campo es obligatorio">
						</div>
					</div>
					<div class="row">
						<div class="form-group text-left  text-left col-xs-10">
							<br>
							<small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
						</div>
					</div>					
					<div class="ln_solid"></div>
					<div class="row">
						<div class="form-group col-xs-12 text-center">
							<button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-success">Guardar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection