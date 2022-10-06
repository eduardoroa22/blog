@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>editar</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>

    @endif
    
    <div class="card">
        <div class="card-body">
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

            @include('admin.roles.partials.form')

            {!! Form::submit('Actualizar rol', ['class' => 'btn btn-primary btn-sm']) !!}


            {!! Form::close() !!}


        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
@stop
