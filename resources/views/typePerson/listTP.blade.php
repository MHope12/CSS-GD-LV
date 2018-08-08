@extends('layouts.main')

@section('main')

<div class="container">
   <div class="wrapper-dashboard">
      <form  method="POST" action="{{route('storeF')}}">
         <div class="col-sm-11">
            <h1 class="text-center text-uppercase" style="margin-top: 10%;">Cargo</h1> 
            <a href="{{route('others')}}" class="btn btn-success">Home</a>
            <br><br>
            <table  class=" table-search hover text-center" style="width:90%">
            	<thead class="thead-light">
            		<tr>
            			<th scope="col">Cod. Proyecto</th>
            			<th scope="col">Cliente</th>
            		</tr>
            	</thead>
            	<tbody>
            		@foreach ($typep as $typeP)
            		<tr>
            			<td scope="row">{{ $typeP->idTypePerson}}</td>
            			<td scope="row">{{ $typeP->nameTypePerson}}</td>
            		</tr>
            		@endforeach
            	</tbody>
            </table>
         </div>
      </form>
   </div>
</div>

@endsection