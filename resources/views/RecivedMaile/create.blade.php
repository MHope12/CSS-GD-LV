@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Nueva Correspondencia <small>Recibida</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								 
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							
							<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('recived_maile_store')}}">

                            {{ csrf_field() }}
                            
                            <div class="row">
                                <div class="form-group col-xs-12 col-md-4">
                                    <label class="control-label" for="sentDate">Fecha de envío<span class="required">*</span></label>
                                    <div class=" xdisplay_inputx has-feedback">
                                        <input type="text" class="form-control single_cal4 has-feedback-left" id="sentDate" name="sentDate" aria-describedby="inputSuccess2Status4" required="required" data-parsley-required-message="Este campo es obligatorio">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                    </div>
                                </div>
                                
                                <div class="form-group col-xs-12 col-md-4">

                                    <label class="control-label" for="first-name">Ciudad<span class="required">*</span></label>
                                    <select class="select2_single form-control" id="city_id" name="city_id" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
                                        @foreach ($city as $cities) 
                                       <option value="{{$cities->idCity}}">{{$cities->nameCity}}</option>
                                     @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-xs-12 col-md-4">
                                    <label class="control-label" for="first-name">Destinatario<span class="required">*</span></label>
                                    <input type="text" id="addressee" name="addressee" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="form-group col-xs-12 col-md-4">
                                    <label class="control-label">Cliente<span class="required">*</span></label>
                                    <select class="select2_single form-control" id="dependency_id" name="dependency_id" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
                                     @foreach ($client as $clients) 
                                       <option value="{{$clients->idClient}}">{{$clients->nameClient}}</option>
                                     @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-xs-12 col-md-4">
                                    <label class="control-label">Proyecto<span class="required">*</span></label>
                                    <select class="select2_single form-control" id="folder_id" name="folder_id" tabindex="-1" required="required" data-parsley-required-message="Este campo es obligatorio">
                                        @foreach ($folder as $folders) 
                                       <option value="{{$folders->idFolder}}">{{$folders->nameFolder}}</option>
                                     @endforeach
                                    </select>
                                </div>

                                <div class="form-group  col-xs-12 col-md-4">
                                    <label class="control-label ">Remitente<span class="required">*</span></label>
                                    <input type="text" id="sender" name="sender" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio" >
                                </div>
                            </div>
                            <div class="row">

                                <div class="form-group col-xs-12 col-md-4">
                                    <label class="control-label" for="sentDate">Fecha de radicación<span class="required">*</span></label>
                                    <div class=" xdisplay_inputx has-feedback">
                                        <input type="text" class="form-control single_cal4 has-feedback-left" id="receivedDate" name="receivedDate" aria-describedby="inputSuccess2Status4" required="required" data-parsley-required-message="Este campo es obligatorio">
                                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                        <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                    </div>
                                </div>
                                
                                <div class="form-group col-xs-12 col-md-4">
                                    <label class="control-label" for="last-name">Asunto<span class="required">*</span></label>
                                    <input type="text" id="affair" name="affair" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio" >
                                </div>
                            
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label class="control-label" for="last-name">Observaciones</label>
                                    <textarea id="observations" name="observations"  class="form-control" name="message" ></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 col-xs-12">
                                    <label class="control-label">Formato<span class="required">*</span></label>
                                    <select class="select2_single form-control" id="storagew_id" name="storagew_id" tabindex="-1"  required="required" data-parsley-required-message="Este campo es obligatorio">
                                       @foreach ($storagew as $storageways) 
                                       <option value="{{$storageways->idStorageWay}}">{{$storageways->nameSW}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <label class="control-label" for="last-name">Número de folios</label>
                                    <input type="text" id="noPages" name="noPages"  class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <label class="control-label"> Entregada a archivo </label>
                                    <div class="checkbox col-xs-9 col-xs-offset-2">
                                        <input type="checkbox" class="flat" id="deliveredToArchive" name="deliveredToArchive"> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-xs-12">
                                    <label class="control-label" for="last-name">Empresa de mensajería<span class="required">*</span></label>
                                    <input type="text" name="CompanyMssgr" id="CompanyMssgr" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <label class="control-label" for="last-name">Mensajero<span class="required">*</span></label>
                                    <input type="text" id="nameMessenger" name="nameMessenger" required="required" class="form-control" data-parsley-required-message="Este campo es obligatorio">
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
                                
                                    <button class="btn btn-primary" type="button">Cancelar</button>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                
                            </div>
                            </div>
                            

                        </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection