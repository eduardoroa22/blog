@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista Usuarios</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.user-index')

@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
@stop
