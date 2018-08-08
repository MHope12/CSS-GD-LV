@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Registrarse</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('codPerson') ? ' has-error' : '' }}">
                            <label for="codPerson" class="col-md-4 control-label">Identificación:</label>

                            <div class="col-md-6">
                                <input id="codPerson" type="text" class="form-control" name="codPerson" value="{{ old('codPerson') }}" required autofocus>

                                @if ($errors->has('codPerson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codPerson') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
    
                        <div class="form-group{{ $errors->has('namePerson') ? ' has-error' : '' }}">
                            <label for="namePerson" class="col-md-4 control-label">Nombres:</label>

                            <div class="col-md-6">
                                <input id="namePerson" type="text" class="form-control" name="namePerson" value="{{ old('namePerson') }}" required autofocus>

                                @if ($errors->has('namePerson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namePerson') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('lastnamePerson') ? ' has-error' : '' }}">
                            <label for="lastnamePerson" class="col-md-4 control-label">Apellidos:</label>

                            <div class="col-md-6">
                                <input id="lastnamePerson" type="text" class="form-control" name="lastnamePerson" value="{{ old('lastnamePerson') }}" required autofocus>

                                @if ($errors->has('lastnamePerson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastnamePerson') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('emailPerson') ? ' has-error' : '' }}">
                            <label for="emailPerson" class="col-md-4 control-label">Correo Corporativo:</label>

                            <div class="col-md-6">
                                <input id="emailPerson" type="email" class="form-control" name="emailPerson" value="{{ old('emailPerson') }}" required>

                                @if ($errors->has('emailPerson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emailPerson') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('typePerson_id') ? ' has-error' : '' }}">
                            <label for="typePerson_id" class="col-md-4 control-label">Tipo de Persona</label>

                            <div class="col-md-6">
                                <input id="typePerson_id" type="email" class="form-control" name="typePerson_id" value="{{ old('typePerson_id') }}" required>

                                @if ($errors->has('typePerson_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('typePerson_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dependency_id') ? ' has-error' : '' }}">
                            <label for="dependency_id" class="col-md-4 control-label">Tipo de Persona</label>

                            <div class="col-md-6">
                                <input id="dependency_id" type="email" class="form-control" name="dependency_id" value="{{ old('dependency_id') }}" required>

                                @if ($errors->has('dependency_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dependency_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('passwordPerson') ? ' has-error' : '' }}">
                            <label for="passwordPerson" class="col-md-4 control-label">Contraseña:</label>

                            <div class="col-md-6">
                                <input id="passwordPerson" type="password" class="form-control" name="passwordPerson" required>

                                @if ($errors->has('passwordPerson'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('passwordPerson') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña:</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
