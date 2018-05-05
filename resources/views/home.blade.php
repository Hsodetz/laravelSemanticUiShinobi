@extends('layouts.master')

@section('contenido')

<div class="ui segments">
    <div class="ui segment">
        <p> Dashboard </p>
    </div>
    <div class="ui secondary segment">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        Te has logueado correctamente!
    </div>
</div>

@endsection
