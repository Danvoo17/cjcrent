@extends('layouts.ogapp')

@section('template_title')
    {{ $incidente->name ?? __('Show') . " " . __('Incidente') }}
@endsection

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
@endsection
