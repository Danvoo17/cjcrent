@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Ver gasto</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('gastosLocals.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Gasto:</strong>
                            {{ $gastosLocal->id_gasto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $gastosLocal->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $gastosLocal->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Costo:</strong>
                            {{ $gastosLocal->costo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Creado:</strong>
                            {{ $gastosLocal->created_at }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Actualizado:</strong>
                            {{ $gastosLocal->updated_at }}
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