@extends('layouts.master')

@section('title', "Usuario $user->id")


@section('contenido')
  
<div class="ui segments">
  <div class="ui segment">
    Editar Usuario
  </div>
  <div class="ui segment">
   
    
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

      
      @include('users.partials.form')
      
    
    {!! Form::close() !!}
    
  </div>
</div>

@stop