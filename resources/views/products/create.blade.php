@extends('layouts.master')

@section('title', "Producto")


@section('contenido')
  
<div class="ui segments">
  <div class="ui segment">
    Crear Producto
  </div>
  <div class="ui segment">
   
    
    {!! Form::open(['route' => ['products.store']]) !!}

      
      @include('products.partials.form')
      
    
    {!! Form::close() !!}
    
  </div>
</div>

@stop