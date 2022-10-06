@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>crear nueva categoria</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}

                @error('name')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly']) !!}
                @error('slug')
                    <span class=" text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}


            {!! Form::close() !!}
        </div>



    </div>


    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class=" text-center p-3 bg-gray ">
            © 2021 Copyright:
            <a class="text-dark" href="/"> Eduardo Roa</a>
        </div>
        <!-- Copyright -->
    </footer>





@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">

@stop


@section('js')

    {{-- SLUG --}}
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection
