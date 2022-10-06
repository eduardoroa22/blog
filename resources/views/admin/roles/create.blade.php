@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>crear</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            
            @include('admin.roles.partials.form')

            {!! Form::submit('Crear rol', ['class' => 'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
@stop
