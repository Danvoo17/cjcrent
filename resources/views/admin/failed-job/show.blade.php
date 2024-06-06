@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Ver</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('failedJobs.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Uuid:</strong>
                            {{ $failedJob->uuid }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Connection:</strong>
                            {{ $failedJob->connection }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Queue:</strong>
                            {{ $failedJob->queue }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Payload:</strong>
                            {{ $failedJob->payload }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Exception:</strong>
                            {{ $failedJob->exception }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Failed At:</strong>
                            {{ $failedJob->failed_at }}
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