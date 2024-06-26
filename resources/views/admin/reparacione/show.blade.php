@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Ver reparacion</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reparaciones.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Reparacion:</strong>
                            {{ $reparacione->id_reparacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $reparacione->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $reparacione->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Costo:</strong>
                            {{ $reparacione->costo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Vehiculo:</strong>
                            {{ $reparacione->id_vehiculo }}
                            ({{ $reparacione->vehiculo->modelo->marca->nombre }}
                            {{ $reparacione->vehiculo->modelo->nombre }}
                            {{ $reparacione->vehiculo->modelo->trim }})
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Emp:</strong>
                            {{ $reparacione->id_emp }}
                            ({{ $reparacione->empleado->nombre }}
                            {{ $reparacione->empleado->apellido }})
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Creado:</strong>
                            {{ $reparacione->created_at }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Actualizado:</strong>
                            {{ $reparacione->updated_at }}
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
    
@stop