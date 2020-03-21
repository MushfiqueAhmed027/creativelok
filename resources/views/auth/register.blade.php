@extends('layouts.app')
@section('content')
<div class="login-box">
    <div class="login-logo">
        
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">
            {{ trans('Register') }}
        </p>
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div>
                <div class="form-group has-feedback">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="radio" name="role_id" value="1" checked>
                            Admin
                        </div>
                        <div class="col-md-4">
                            <input type="radio" name="role_id" value="3">
                            Employee
                        </div>
                        <div class="col-md-4">
                            <input type="radio" name="role_id" value="2">
                            User
                        </div>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" name="name" class="form-control" required="required"="autofocus" placeholder="{{ trans('global.user_name') }}">
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" required="required" placeholder="{{ trans('global.login_email') }}">
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" required="required" placeholder="{{ trans('global.login_password') }}">
                    @if($errors->has('password'))
                        <p class="help-block">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="{{ trans('global.login_password_confirmation') }}">
                    @if($errors->has('password_confirmation'))
                        <p class="help-block">
                            {{ $errors->first('password_confirmation') }}
                        </p>
                    @endif
                </div>
               
              
                <div class="row">
                    <div class="col-xs-8">

                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            {{ trans('global.register') }}
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection