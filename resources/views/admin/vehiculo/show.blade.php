@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'Dashboard')

@section('content_header')
    <h1>Mostrar vehiculo</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('vehiculos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Vehiculo:</strong>
                            {{ $vehiculo->id_vehiculo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Matricula:</strong>
                            {{ $vehiculo->matricula }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Precio:</strong>
                            {{ $vehiculo->precio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Año:</strong>
                            {{ $vehiculo->año }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Color:</strong>
                            {{ $vehiculo->color }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado:</strong>
                            {{ $vehiculo->estado }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pasajeros:</strong>
                            {{ $vehiculo->pasajeros }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Puertas:</strong>
                            {{ $vehiculo->puertas }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Maletas:</strong>
                            {{ $vehiculo->maletas }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo:</strong>
                            {{ $vehiculo->tipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Traccion:</strong>
                            {{ $vehiculo->traccion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Transmision:</strong>
                            {{ $vehiculo->transmision }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Motor:</strong>
                            {{ $vehiculo->motor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Opciones:</strong>
                            {{ $vehiculo->opciones }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Imagen:</strong>
                            {{ $vehiculo->imagen }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Modelo:</strong>
                            {{ $vehiculo->id_modelo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Seguro:</strong>
                            {{ $vehiculo->id_seguro }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Creado:</strong>
                            {{ $vehiculo->created_at }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Actualizado:</strong>
                            {{ $vehiculo->updated_at }}
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