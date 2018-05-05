@extends('layouts.master')

@section('contenido')

<div class="ui segments">
    <div class="ui segment">
        Productos
        @can('products.create')
          <a href="{{ route('products.create') }}" class="mini ui negative basic right floated button"> Crear </a>
        @endcan

    </div>
    <div class="ui secondary segment">

      <table class="ui compact small celled table right centered header">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th colspan="3">&nbsp</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($products as $product)
            <tr>
              <td> {{ $product->id }} </td>
              <td> {{ $product->name }} </td>
              <td>
                @can('products.show') 
                  <a class="mini ui primary basic button" href="{{ route('products.show', $product->id) }}"> Ver </a>
                @endcan
              </td>
              <td>
                @can('products.edit') 
                  <a class="mini ui orange basic button" href="{{ route('products.edit', $product->id) }}"> Editar </a>
                @endcan
              </td>
              <td>
                @can('products.destroy') 
                 
                  {!! Form::open(['route' => ['products.destroy', '$product->id'], 'method' => 'DELETE']) !!}
                    <button class="mini ui negative basic button"> Eliminar </button>
                  {!! Form::close() !!}
                  
                @endcan
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
      <div class="ui pagination menu">
        <a href="" class="item"> 
          {!! $products->links() !!}
        </a>
      </div>
       
    </div>
</div>

@endsection