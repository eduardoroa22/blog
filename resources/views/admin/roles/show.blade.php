@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>mostrar</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
@stop


@section('js')
    <script> console.log('Hi!'); </script>
@stop