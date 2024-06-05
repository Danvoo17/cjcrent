@extends('layouts.ogapp')

@section('template_title')
    {{ $modelo->name ?? __('Show') . " " . __('Modelo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Modelo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('modelos.index') }}"> {{ __('Back') }}</a>
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

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
