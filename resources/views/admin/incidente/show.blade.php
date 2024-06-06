@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>ver</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Incidente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('incidentes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Incidente:</strong>
                            {{ $incidente->id_incidente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $incidente->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $incidente->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Hora:</strong>
                            {{ $incidente->hora }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Vehiculo:</strong>
                            {{ $incidente->id_vehiculo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cliente:</strong>
                            {{ $incidente->id_cliente }}
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