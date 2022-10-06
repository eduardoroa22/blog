@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administracion</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $etiquetas }}</h3>

                            <p>Etiquetas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tags"></i>
                        </div>
                        @can('admin.categories.destroy')
                            <a href="{{ route('admin.tags.index') }}" class="small-box-footer">Mas informacion <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        @endcan

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>{{ $usuarios }}</h3>

                            <p>Usuarios registrados</p>
                        </div>
                        <div class="icon">
                            <i class=" text-gray fas fa-users"></i>
                        </div>
                        @can('admin.categories.destroy')
                            <a href="{{ route('admin.users.index') }}" class="small-box-footer">Mas informacion <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        @endcan

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $categorias }}</h3>

                            <p>Categorias</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        @can('admin.categories.destroy')
                            <a href="{{ route('admin.categories.index') }}" class="small-box-footer">Mas informacion <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        @endcan

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $postss }}</h3>

                            <p>Total de Posts</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-mail-bulk"></i>
                        </div>
                        @can('admin.categories.destroy')
                            <a href="{{ route('admin.posts.index') }}" class="small-box-footer">Mas informacion <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        @endcan


                    </div>
                    <br>
                </div>


                <h4 class="col-lg-12">Post en estado Publicado y Borrador</h4>



                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>{{ $publicados1 }}</h3>

                            <p>Post en estado Borrador</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clipboard"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $publicados2 }}</h3>

                            <p>Post en estado Publicado</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->

    

    </section>


@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">

@stop

