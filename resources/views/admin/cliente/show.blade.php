@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Ver cliente</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('clientes.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cliente:</strong>
                            {{ $cliente->id_cliente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $cliente->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido:</strong>
                            {{ $cliente->apellido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Nac:</strong>
                            {{ $cliente->fecha_nac }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cedula:</strong>
                            {{ $cliente->cedula }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Licencia:</strong>
                            {{ $cliente->licencia }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id User:</strong>
                            {{ $cliente->id_user }}
                            ({{ $cliente->user->name }})
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Creado:</strong>
                            {{ $cliente->created_at }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Actualizado:</strong>
                            {{ $cliente->updated_at }}
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