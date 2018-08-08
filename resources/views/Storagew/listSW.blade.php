@extends('layouts.main')

@section('main')

<div class="row justify-content-center main-container">
   <div class="col-sm-11">
    <form method="POST" action="{{ route('storeSW')}}">

         {{ csrf_field() }}

         <h1 class="text-center text-uppercase ">Formato<small class="text-center"> Almacenamiento Documento</small> <br>   </h1>
         <div class="col-sm-12">
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="fas fa-plus"></i> Nuevo Formato </button>
          <a href="{{route('others')}}" class="btn btn-success">Home</a>
            <div class="row">
               <div class="col-sm-12">
                  <div class="collapse" id="collapseExample">
                     <div class="card card-body">
                        <form  class="needs-validation" novalidate>
                           <div class="row justify-content-center">
                              <div class="col-sm-12 col-md-6 form-group text-left">
                                 <label for="" class="col-sm-12 col-lg-4 col-form-label">Nombre <sup>*</sup></label>
                                 <div class="col-sm-10 col-lg-12">
                                    <input type="text" class="form-control" name="nameSW" required>
                                    <div class="invalid-feedback">
                                       Por favor ingrese el nombre
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-12 col-md-12 form-group text-center ">
                                 <button type="submit" class="btn btn-info">Guardar</button>
                                 <a href="{{route('mainboard')}}" class="btn btn-light">Cancelar</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <form  >
         <div class="col-sm-11">
         @foreach($storagew as $Storage)
         <br><br>
            <div>
               <div class="card" style="width: 30rem;">
                  <div class="card-header" id="headingOne">
                     <h6 class="mb-0" data-toggle="collapse" data-target="#gerencia" aria-expanded="true" aria-controls="gerencia">
                     {{$Storage->nameSW}}
                     <a data-toggle="modal" data-target="#exampleModalCenter-{{$Storage->idStorageWay}}"><i class="fas fa-pencil-alt float-right"></i></a>
                     </h6>
                  </div>
                  <div class="modal fade" id="exampleModalCenter-{{$Storage->idStorageWay}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Actualizar Formato</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                           <form class="login100-form validate-form" method="POST"  action="{{ route('updateSW', [$Storage->idStorageWay]) }}">
                                  {{ method_field('PUT') }}
                                  {{ csrf_field() }}
                                  
                                 <input type="text" class="form-control" name="nameSW" value="{{ $Storage->nameSW }}" required>

                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                   <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                 </div>
                           </form>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
            </div>
         @endforeach
         </div>
      </form>
    </form>
  </div>
</div>
@endsection