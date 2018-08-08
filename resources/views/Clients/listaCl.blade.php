@extends('layouts.main') 

@section('main')

<div class="right_col" role="main">
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Clientes </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
   			<div class="x_content">
               <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
   					
   				<div class="col-md-12 col-sm-12 col-xs-12">
						
						<div class="x_content">
							
                     <table  id="datatable-responsive" class="table  table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead class="thead-light">
                           <tr>
                              <th scope="col">NIT Empresa</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Encargad@</th>
                              <th scope="col">Proyecto</th>
                              <th scope="col">Opciones </th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($clients as $clients)
                           <tr>
                              <td scope="row">{{ $clients->nitClient}}</td>
                              <td scope="row">{{ $clients->nameClient}}</td>
                              <td scope="row">{{ $clients->personClient}}</td>
                              <td scope="row">
                                 @foreach($clients->folder as $folder)
                                    <il>{{$folder->nameFolder}} // </il>
                                 @endforeach
                              </td>
                              <td>
                                 <a class="btn btn-link" data-toggle="modal" data-target="#exampleModalCenter-{{$clients->idClient}}"><i class="fas fa-pencil-alt"></i></a>

                                    <div class="dropdown">
                                       <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                          <i class="fa fa-ellipsis-v"></i>
                                       </button>
                                       <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                       <li>
                                          <a class="btn btn-link" href="{{ route('clients/Modificar', ['idClient' => $clients->idClient]) }}">Modificar</a>
                                       </li>
                                       <li class="lock"><a href="#">Desctivar</a></li>
                                       <li class="hide unlock"><a href="#">Activar</a></li>
                                       </div>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                     </table>
   						</div>
					   </div>
               </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection