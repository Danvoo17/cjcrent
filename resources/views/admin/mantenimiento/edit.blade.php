@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Editar mantenimiento</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-primary btn-sm" href="{{ route('mantenimientos.index') }}"> {{ __('Atras') }}</a>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('mantenimientos.update', $mantenimiento->id_mantenimiento) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.mantenimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
@stop