
@extends('layouts.master')

@section('title', "Registro")


@section('contenido')

<div class="ui card red container center">
    <div class="content">
      <div class="header"> {{ __('Register') }} </div>
    </div>
    <div class="content">
      
      <form class="ui form" method="POST" action="{{ route('register') }}">
        @csrf
          <div class="field">
            <label> {{ __('Name') }} </label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
            @endif

          </div>
          <div class="field">
            <label> {{ __('E-Mail Address') }} </label>
            <input type="email" name="email" id="email" placeholder="Last Name" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="field">
            <label> {{ __('Confirm Password') }} </label>
            <input type="password" name="password_confirmation" id="password-confirm" placeholder="Password" required>
    
            @if ($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
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
   
    </div>

        <div class="extra content">
          <button class="ui button red" type="submit">   {{ __('Register') }} </button>
        </div>
      </form>
  </div>

@stop


