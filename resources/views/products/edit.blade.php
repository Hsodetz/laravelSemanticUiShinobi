@extends('layouts.master')

@section('title', "Producto $product->id")


@section('contenido')
  
<div class="ui segments">
  <div class="ui segment">
    Editar Producto
  </div>
  <div class="ui segment">
   
    
    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}

      
      @include('products.partials.form')
      
    
    {!! Form::close() !!}
    
  </div>
</div>

@stop