@extends('layouts.ogapp')

@section('template_title')
    {{ $reparacione->name ?? __('Show') . " " . __('Reparacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reparacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('reparaciones.index') }}"> {{ __('Back') }}</a>
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
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Emp:</strong>
                            {{ $reparacione->id_emp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
