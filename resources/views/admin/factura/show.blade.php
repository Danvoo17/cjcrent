@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>ver facturas</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('facturas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Cod Factura:</strong>
                            {{ $factura->cod_factura }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Metodo Pago:</strong>
                            {{ $factura->metodo_pago }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha:</strong>
                            {{ $factura->fecha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $factura->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Itbis:</strong>
                            {{ $factura->itbis }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descuentos:</strong>
                            {{ $factura->descuentos }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Monto Total:</strong>
                            {{ $factura->monto_total }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Renta:</strong>
                            {{ $factura->id_renta }}
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