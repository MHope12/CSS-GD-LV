
<div class="limiter">
	<div class="container-login98">
		<div class="wrap-login98">
			<form class="login100-form" method="POST" action="{{ route('searchPR')}}">

				{{ csrf_field() }}
				
				<div class="container-login98">
					<div class="form-group">
						<div class="wrap-input100 validate-input m-t-4">
							<input class="input100" type="text" name="searchPR" placeholder="Buscar..." required>							
						</div>

						<br>

						<button class="btn btn-warning" type="submit">Buscar</button>

						<div class="container-login100-form-btn">
						   <a href="{{ route('newPR')}}" class="btn btn-warning">Asociación Permiso-Rol</a>
						</div>

                  <div class="container-login100-form-btn">
                     <a href="{{ route('mainboard' )}}" class="btn btn-danger"> Home </a>
                  </div>
					</div>

					<table class="table table-bordered">
						<thead class="thead-light">
							<tr>
								<th scope="col"> # </th>
								<th scope="col">Permiso</th>
								<th scope="col">Rol</th>
							</tr>
						</thead>
						<tbody class="table table-bordered">
							@foreach ($permisrole as $permisRole)
							<tr>
								<td scope="row">{{ $permisRole->nPR}}</td>
                        		<td scope="row">{{ $permisRole->Roles->nameRole}}</td>
								<td scope="row">{{ $permisRole->Permissions->namePermission}}</td>
								<td>
									<a class="btn btn-link" href="{{ route('permission_role/edit', ['nPR' => $permisRole->nPR]) }}">Actualizar</a>
									<a href="{{ route('permission_role/destroy', ['nPR' => $permisRole -> nPR]) }}">Eliminar</a>
								</td>
							</tr>
							@endforeach
						</tbody>
						
					</table>
				</div>
			</form>
		</div>
	</div>
</div>