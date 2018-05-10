
@extends('layouts.master')

@section('title', "Producto $product->id")


@section('contenido')
  
<div class="ui segments">
  <div class="ui segment">
    Producto
  </div>
  <div class="ui secondary segment">
    <p>
      <strong>Nombre</strong> {{ $product->name }}
    </p>
    <p>
      <strong>Descripcion</strong> {{ $product->description }}
    </p>
  </div>
</div>

@stop