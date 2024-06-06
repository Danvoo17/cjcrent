@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Renta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rentas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Renta:</strong>
                            {{ $renta->id_renta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ub Recogida:</strong>
                            {{ $renta->ub_recogida }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ub Devuelta:</strong>
                            {{ $renta->ub_devuelta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Recogida:</strong>
                            {{ $renta->fecha_recogida }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Hora Recogida:</strong>
                            {{ $renta->hora_recogida }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Devuelta:</strong>
                            {{ $renta->fecha_devuelta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Hora Devuelta:</strong>
                            {{ $renta->hora_devuelta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Costo:</strong>
                            {{ $renta->costo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado:</strong>
                            {{ $renta->estado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Vehiculo:</strong>
                            {{ $renta->id_vehiculo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cliente:</strong>
                            {{ $renta->id_cliente }}
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