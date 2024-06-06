@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Ver aseguradora</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Aseguradora</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('aseguradoras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Aseg:</strong>
                            {{ $aseguradora->id_aseg }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $aseguradora->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $aseguradora->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $aseguradora->email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $aseguradora->direccion }}
                        </div>

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
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop