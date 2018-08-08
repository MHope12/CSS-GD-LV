@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Nuevo Usuario </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
             <li><a href="editar_usuario.html" class="collapse-link"><i class="fa fa-wrench"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('storeU')}}">
            
            {{ csrf_field()}}
            
            <div class="row ">
              <div class="form-group col-xs-10 col-md-2">
                <label class="control-label text-right">Tipo Documento</label>
                <input disabled required data-parsley-required-message="Este campo es obligatorio"  class="form-control text-right" value="CC">
              </div>
              <div class="form-group col-xs-12 col-md-2">
                <label class="control-label">Número de documento</label>
                <input type="text" name="codPerson" required data-parsley-required-message="Este campo es obligatorio"  class="form-control" type="number">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-12 col-md-4">
                <label class="control-label">Nombre(s)</label>
                <input type="text" name="namePerson" required data-parsley-required-message="Este campo es obligatorio"  class="form-control">
              </div>
              <div class="form-group col-xs-12 col-md-4">
                <label class="control-label">Apellido(s)</label>
                <input type="text" name="lastnamePerson" required data-parsley-required-message="Este campo es obligatorio"  class="form-control">
              </div>
              <div class="form-group col-xs-12 col-md-4">
                <label class="control-label">Correo Electrónico Corporativo</label>
                <input type="email" name="email" required data-parsley-required-message="Este campo es obligatorio"  data-parsley-type-message="Ingrese un valor válido de correo electrónico" class="form-control">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-md-4 col-xs-12">
                <label class="control-label">Cargo</label>
                <select class="select2_single form-control" tabindex="-1" required data-parsley-required-message="Este campo es obligatorio" name="idTypePerson">
                  <option>Selecciona una Opción</option>
                  @foreach ($typep as $typePerson)
                    <option value="{{$typePerson->idTypePerson}}">{{$typePerson->nameTypePerson}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-4 col-xs-12">
                <label class="control-label">Dependencia</label>
                <select class="select2_single form-control" tabindex="-1" required data-parsley-required-message="Este campo es obligatorio" name="idDependency">
                  <option>Selecciona una Opción</option>
                  @foreach ($depend as $Depend)
                    <option value="{{$Depend->idDependency}}">{{$Depend->nameDependency}}</option>
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
              
                <button class="btn btn-primary" type="button">Cancelar</button>
                <button type="submit" class="btn btn-success">Siguiente</button>
              
            </div>
            </div>
            

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection