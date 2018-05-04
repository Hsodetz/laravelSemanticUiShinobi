
@extends('layouts.master')


@section('title', "Login")

@section('contenido')


<div class="ui card container center red">
  <div class="content">
    <div class="header"> {{ __('Login') }} </div>
  </div>
  <div class="content">
    
    <form class="ui form" method="POST" action="{{ route('login') }}">

      @csrf

      <div class="field">
        <label> {{ __('E-Mail Address') }} </label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus placeholder="Email">

        
        @if ($errors->has('email'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
        

      </div>
      <div class="field">
        <label> {{ __('Password') }} </label>
        <input type="password" name="password" id="password" placeholder="Password" required>

        @if ($errors->has('password'))
          <span class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif

      </div>
      <div class="field">
        <div class="ui checkbox">
          <input type="checkbox" name="remember" tabindex="0">
          <label for="remember">{{ old('remember') ? 'checked' : '' }} {{ __('Remember Me') }}</label>
        </div>
      </div>
      <button style="margin-left: 70%;" class="ui button red" type="submit">  {{ __('Login') }} </button>
    </form>

  </div>
  <div class="extra content">
    <a href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }} </a>
  </div>
</div>


@stop

