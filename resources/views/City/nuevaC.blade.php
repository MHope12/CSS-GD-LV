@extends('layouts.main')

@section('main')
<div class="right_col" role="main">
<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Cargue Ciudades </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
		          <div class="panel-body">

		            <form action="{{ url('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
		                {{csrf_field()}}
		 
		                @if ($errors->any())
		                    <div class="alert alert-danger">
		                        <a class="close" data-dismiss="alert" aria-label="close">×</a>
		                        <ul>
		                            @foreach ($errors->all() as $error)
		                                <li>{{ $error }}</li>
		                            @endforeach
		                        </ul>
		                    </div>
		                @endif
		 
                        <input class="form-group" type="file" id="import_file" name="import_file" required />
                        <br>
						<button class="btn btn-success">Cargar</button>
					</form>                 
				</div>             
			</div>         
		</div>     
	</div>
</div> 
@endsection
