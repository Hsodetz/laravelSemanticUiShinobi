@extends('layouts.master')

@section('contenido')

<div class="ui segments">
    <div class="ui segment">
        Productos
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
          
          @foreach ($users as $user)
            <tr>
              <td> {{ $user->id }} </td>
              <td> {{ $user->name }} </td>
              <td width="10px">
                @can('users.show') 
                  <a class="mini ui primary basic button" href="{{ route('users.show', $user->id) }}"> Ver </a>
                @endcan
              </td>
              <td width="10px">
                @can('users.edit') 
                  <a class="mini ui orange basic button" href="{{ route('users.edit', $user->id) }}"> Editar </a>
                @endcan
              </td>
              <td width="10px">
                @can('users.destroy') 
                 
                  {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
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
          {!! $users->links() !!}
        </a>
      </div>
       
    </div>
</div>

@endsection