@extends('layouts.guestSuperAdmin')

@section('content')

    <div class="row">
        <div class="col-4 offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Acceso Administrador</h1>
                </div>
                <div class="panel-body">
                    <form action="{{ route('loginSuperAdmin') }}" method="post">
                        @csrf
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}"">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="">
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection