@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Mostrar modelo</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('modelos.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Modelo:</strong>
                            {{ $modelo->id_modelo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $modelo->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Trim:</strong>
                            {{ $modelo->trim }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Marca:</strong>
                            {{ $modelo->id_marca }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Creado:</strong>
                            {{ $modelo->created_at }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Actualizado:</strong>
                            {{ $modelo->updated_at }}
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