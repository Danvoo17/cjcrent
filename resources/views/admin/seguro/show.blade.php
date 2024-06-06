@extends('layouts.ogapp')

@section('template_title')
    {{ $seguro->name ?? __('Show') . " " . __('Seguro') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Seguro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('seguros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Seguro:</strong>
                            {{ $seguro->id_seguro }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Num Poliza:</strong>
                            {{ $seguro->num_poliza }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo:</strong>
                            {{ $seguro->tipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $seguro->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Inicio:</strong>
                            {{ $seguro->fecha_inicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Fin:</strong>
                            {{ $seguro->fecha_fin }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Costo:</strong>
                            {{ $seguro->costo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Aseg:</strong>
                            {{ $seguro->id_aseg }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
