@extends('layouts.main')

@section('main')

<div class="right_col" role="main">
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Asociación Usuario-Rol </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          
          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('updateRU', [$userole->nRU])}}">

              {{method_field('PUT')}}
              {{csrf_field()}}
            
        <div class="row">
            
          <div class="row">
           <p> Usuario </p>
              <select name="idUser" class="select2_single form-control" tabindex="-1" required data-parsley-required-message="Este campo es obligatorio">
                @foreach ($user as $User)
                  <option value="{{$User->idUser}}">{{$User->namePerson}}</option>
                @endforeach
              </select>
          </div>
          <div class="row">
           <p> Rol de Usuario </p>
              <select name="idRole" class="select2_single form-control" tabindex="-1" required data-parsley-required-message="Este campo es obligatorio">
                @foreach ($role as $Role)
                  <option value="{{$Role->idRole}}">{{$Role->nameRole}}</option>
                @endforeach
              </select>
          </div>

        </div>
        <div>
          <div class="row">
              <div class="form-group text-left">
                <small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
              </div>
          </div>          
          <div class="ln_solid"></div>
            <div class="row">
               <div class="form-group col-xs-12 text-center">
               
                  <a href="{{route('listaRU')}}" class="btn btn-primary">Cancelar</a>
                  <button class="btn btn-success">Guardar</button>
               
               </div>
            </div>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
