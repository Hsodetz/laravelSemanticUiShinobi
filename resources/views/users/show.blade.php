
@extends('layouts.master')

@section('title', "Usuario $user->id")


@section('contenido')
  
<div class="ui segments">
  <div class="ui segment">
    Usuario
  </div>
  <div class="ui secondary segment">
    <p>
      <strong>Nombre</strong> {{ $user->name }}
    </p>
    <p>
      <strong>Email</strong> {{ $user->email }}
    </p>
  </div>
</div>

@stop